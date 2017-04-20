<?php
namespace Topxia\Service\Cash\Impl;

use Topxia\Service\Common\BaseService;
use Topxia\Service\Common\ServiceEvent;
use Topxia\Service\Cash\CashOrdersService;

class CashOrdersServiceImpl extends BaseService implements CashOrdersService
{
    public function getOrder($id)
    {
        return $this->getOrderDao()->getOrder($id);
    }

    public function addOrder($order)
    {
        $coinSetting = $this->getSettingService()->get('coin', array());

        if (!is_numeric($order['amount'])) {
            throw $this->createServiceException($this->getKernel()->trans('充值金额必须为整数!'));
        }

        $coin                 = $coinSetting['cash_rate'] * $order['amount'];
        $order['sn']          = "O".date('YmdHis').rand(10000, 99999);
        $order['status']      = "created";
        $order['title']       = $this->getKernel()->trans('充值购买').$coin.$coinSetting['coin_name'];
        $order['createdTime'] = time();

        return $this->getOrderDao()->addOrder($order);
    }

    public function getOrderBySn($sn, $lock = false)
    {
        return $this->getOrderDao()->getOrderBySn($sn, $lock);
    }

    public function getOrderByToken($token)
    {
        return $this->getOrderDao()->getOrderByToken($token);
    }

    public function cancelOrder($id, $message = '', $data = array())
    {
        $order = $this->getOrder($id);

        if (empty($order)) {
            throw $this->createServiceException($this->getKernel()->trans('订单不存在，取消订单失败！'));
        }

        if (!in_array($order['status'], array('created'))) {
            throw $this->createServiceException($this->getKernel()->trans('当前订单状态不能取消订单！'));
        }

        $order = $this->getOrderDao()->updateOrder($order['id'], array('status' => 'cancelled'));

        $this->_createLog($order['id'], 'cancelled', $message, $data);

        return $order;
    }

    public function updateOrder($id, $fileds)
    {
        return $this->getOrderDao()->updateOrder($id, $fileds);
    }

    public function payOrder($payData)
    {
        $success = true;

        try {
            $this->getOrderDao()->getConnection()->beginTransaction();

            $order = $this->getOrderDao()->getOrderBySn($payData['sn'], true);

            if (empty($order)) {
                throw $this->createServiceException($this->getKernel()->trans('订单(%sn%)已被删除，支付失败。', array('%sn%' =>$payData['sn'] )));
            }

            if ($payData['status'] == 'success') {
                // 避免浮点数比较大小可能带来的问题，转成整数再比较。

                if (intval($payData['amount'] * 100) !== intval($order['amount'] * 100)) {
                    $message = sprintf($this->getKernel()->trans('订单(%sn%)的金额(%orderAmount%)与实际支付的金额(%payAmount%)不一致，支付失败。',array(
                        '%sn%' => $order['sn'],
                        '%orderAmount%' => $order['amount'],
                        '%payAmount%' => $payData['amount'])));
                    $this->_createLog($order['id'], 'pay_error', $message, $payData);
                    throw $this->createServiceException($message);
                }

                if ($this->canOrderPay($order)) {
                    $this->getOrderDao()->updateOrder($order['id'], array(
                        'status'   => 'paid',
                        'paidTime' => $payData['paidTime']
                    ));
                    $this->_createLog($order['id'], 'pay_success', $this->getKernel()->trans('付款成功'), $payData);

                    $userId = $order["userId"];
                    $inFlow = array(
                        'userId'   => $userId,
                        'amount'   => $order["amount"],
                        'name'     => $this->getKernel()->trans('入账'),
                        'orderSn'  => $order['sn'],
                        'category' => 'outflow',
                        'note'     => '',
                        'payment'  => $order['payment']
                    );

                    $rmbInFlow = $this->getCashService()->inflowByRmb($inFlow);

                    $rmbOutFlow = array(
                        'userId'   => $userId,
                        'amount'   => $order["amount"],
                        'name'     => $this->getKernel()->trans('出账'),
                        'orderSn'  => $order['sn'],
                        'category' => 'inflow',
                        'note'     => '',
                        'parentSn' => $rmbInFlow['sn']
                    );

                    $coinInFlow = $this->getCashService()->changeRmbToCoin($rmbOutFlow);

                    $success = true;
                    $this->dispatchEvent("order.pay.success",
                        new ServiceEvent($order, array('targetType' => 'coin'))
                    );
                } else {
                    $this->_createLog($order['id'], 'pay_ignore', $this->getKernel()->trans('订单已处理'), $payData);
                }
            } else {
                $this->_createLog($order['id'], 'pay_unknown', '', $payData);
            }

            $this->getOrderDao()->getConnection()->commit();
        } catch (\Exception $e) {
            $this->getOrderDao()->getConnection()->rollback();

            throw $e;
        }

        $order = $this->getOrderDao()->getOrder($order['id']);

        return array($success, $order);
    }

    public function searchOrders($conditions, $orderBy, $start, $limit)
    {
        $this->closeOrders();

        return $this->getOrderDao()->searchOrders($conditions, $orderBy, $start, $limit);
    }

    public function searchOrdersCount($conditions)
    {
        return $this->getOrderDao()->searchOrdersCount($conditions);
    }

    public function closeOrders()
    {
        $time = time() - 48 * 3600;
        $this->getOrderDao()->closeOrders($time);
    }

    public function analysisAmount($conditions)
    {
        return $this->getOrderDao()->analysisAmount($conditions);
    }

    public function createPayRecord($id, array $payData)
    {
        $order = $this->getOrder($id);
        $data  = $order['data'];

        if (!is_array($data)) {
            $data = json_decode($order['data'], true);
        }

        foreach ($payData as $key => $value) {
            $data[$key] = $value;
        }

        $fields = array('data' => json_encode($data));
        $order  = $this->updateOrder($id, $fields);
        $this->_createLog($order['id'], 'cash_pay_create', $this->getKernel()->trans('创建交易'), $payData);
    }

    protected function _createLog($orderId, $type, $message = '', array $data = array())
    {
        $user = $this->getCurrentUser();

        $log = array(
            'orderId'     => $orderId,
            'type'        => $type,
            'message'     => $message,
            'data'        => json_encode($data),
            'userId'      => $user->id,
            'ip'          => $user->currentIp,
            'createdTime' => time()
        );

        return $this->getOrderLogDao()->addLog($log);
    }

    public function getLogsByOrderId($orderId)
    {
        return $this->getOrderLogDao()->getLogsByOrderId($orderId);
    }

    public function canOrderPay($order)
    {
        if (empty($order['status'])) {
            throw new \InvalidArgumentException();
        }

        return in_array($order['status'], array('created'));
    }

    protected function getOrderDao()
    {
        return $this->createDao('Cash.CashOrdersDao');
    }

    protected function getOrderLogDao()
    {
        return $this->createDao('Cash.CashOrdersLogDao');
    }

    protected function getSettingService()
    {
        return $this->createService('System.SettingService');
    }

    protected function getCashService()
    {
        return $this->createService('Cash.CashService');
    }
}
