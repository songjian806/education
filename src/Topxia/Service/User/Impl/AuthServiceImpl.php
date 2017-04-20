<?php
namespace Topxia\Service\User\Impl;

use Topxia\Common\SimpleValidator;
use Topxia\Service\User\AuthService;
use Topxia\Service\Common\BaseService;

class AuthServiceImpl extends BaseService implements AuthService
{
    private $partner = null;

    public function register($registration, $type = 'default')
    {
        if (isset($registration['nickname']) && !empty($registration['nickname'])
            && $this->getSensitiveService()->scanText($registration['nickname'])) {
            throw $this->createServiceException('用户名中含有敏感词！');
        }

        if ($this->registerLimitValidator($registration)) {
            throw $this->createServiceException('由于您注册次数过多，请稍候尝试');
        }

        $this->getKernel()->getConnection()->beginTransaction();
        try {
            $registration = $this->refillFormData($registration, $type);

            $authUser = $this->getAuthProvider()->register($registration);

            if ($type == 'default') {
                if (!empty($authUser['id'])) {
                    $registration['token'] = array(
                        'userId' => $authUser['id']
                    );
                }

                $newUser = $this->getUserService()->register($registration, $this->getAuthProvider()->getProviderName());
            } else {
                $newUser = $this->getUserService()->register($registration, $type);

                if (!empty($authUser['id'])) {
                    $this->getUserService()->bindUser($this->getPartnerName(), $authUser['id'], $newUser['id'], null);
                }
            }

            $this->getKernel()->getConnection()->commit();
            return $newUser;
        } catch (\Exception $e) {
            $this->getKernel()->getConnection()->rollBack();
            throw $e;
        }
    }

    protected function registerLimitValidator($registration)
    {
        $authSettings = $this->getSettingService()->get('auth', array());
        $user         = $this->getCurrentUser();

        if (!$user->isAdmin() && isset($authSettings['register_protective'])) {
            $status = $this->protectiveRule($authSettings['register_protective'], $registration['createdIp']);

            if (!$status) {
                return true;
            }
        }
    }

    protected function protectiveRule($type, $ip)
    {
        switch ($type) {
            case 'middle':
                $condition = array(
                    'startTime' => time() - 24 * 3600,
                    'createdIp' => $ip);
                $registerCount = $this->getUserService()->searchUserCount($condition);

                if ($registerCount > 30) {
                    return false;
                }

                return true;
            case 'high':
                $condition = array(
                    'startTime' => time() - 24 * 3600,
                    'createdIp' => $ip);
                $registerCount = $this->getUserService()->searchUserCount($condition);

                if ($registerCount > 10) {
                    return false;
                }

                $registerCount = $this->getUserService()->searchUserCount(array(
                    'startTime' => time() - 3600,
                    'createdIp' => $ip));

                if ($registerCount >= 1) {
                    return false;
                }

                return true;
            default:
                return true;
        }
    }

    protected function refillFormData($registration, $type = 'default')
    {
        if ($type == 'default') {
            $registration = $this->getUserService()->parseRegistration($registration);
        }

        if (!isset($registration['nickname']) || empty($registration['nickname'])) {
            $registration['nickname'] = $this->getUserService()->generateNickname($registration);
        }

        if ($this->getUserService()->isMobileRegisterMode() && !isset($registration['email'])) {
            $registration['email'] = $this->getUserService()->generateEmail($registration);
        }
        $registration = $this->fillOrgId($registration);
        return $registration;
    }

    public function syncLogin($userId)
    {
        $providerName = $this->getAuthProvider()->getProviderName();
        $bind         = $this->getUserService()->getUserBindByTypeAndUserId($providerName, $userId);

        if (empty($bind)) {
            return '';
        }

        return $this->getAuthProvider()->syncLogin($bind['fromId']);
    }

    public function syncLogout($userId)
    {
        $providerName = $this->getAuthProvider()->getProviderName();
        $bind         = $this->getUserService()->getUserBindByTypeAndUserId($providerName, $userId);

        if (empty($bind)) {
            return '';
        }

        return $this->getAuthProvider()->syncLogout($bind['fromId']);
    }

    public function changeNickname($userId, $newName)
    {
        if ($this->hasPartnerAuth()) {
            $providerName = $this->getAuthProvider()->getProviderName();
            $bind         = $this->getUserService()->getUserBindByTypeAndUserId($providerName, $userId);

            if ($bind) {
                $this->getAuthProvider()->changeNickname($bind['fromId'], $newName);
            }
        }

        $this->getUserService()->changeNickname($userId, $newName);
    }

    public function changeEmail($userId, $password, $newEmail)
    {
        if ($this->hasPartnerAuth()) {
            $providerName = $this->getAuthProvider()->getProviderName();
            $bind         = $this->getUserService()->getUserBindByTypeAndUserId($providerName, $userId);

            if ($bind) {
                $this->getAuthProvider()->changeEmail($bind['fromId'], $password, $newEmail);
            }
        }

        $this->getUserService()->changeEmail($userId, $newEmail);
    }

    public function changePassword($userId, $oldPassword, $newPassword)
    {
        if ($this->hasPartnerAuth()) {
            $providerName = $this->getAuthProvider()->getProviderName();
            $bind         = $this->getUserService()->getUserBindByTypeAndUserId($providerName, $userId);

            if ($bind) {
                $this->getAuthProvider()->changePassword($bind['fromId'], $oldPassword, $newPassword);
            }
        }

        $this->getUserService()->changePassword($userId, $newPassword);
    }

    public function changePayPassword($userId, $userLoginPassword, $newPayPassword)
    {
        if (!$this->checkPassword($userId, $userLoginPassword)) {
            throw new \InvalidArgumentException();
        }

        $this->getUserService()->changePayPassword($userId, $newPayPassword);
    }

    public function changePayPasswordWithoutLoginPassword($userId, $newPayPassword)
    {
        $this->getUserService()->changePayPassword($userId, $newPayPassword);
    }

    public function checkUsername($username, $randomName = '')
    {
//如果一步注册则$randomName为空，正常校验discus和系统校验，如果两步注册，则判断是否使用默认生成的，如果是，跳过discus和系统校验
        if (empty($randomName) || $username != $randomName) {
            try {
                $result = $this->getAuthProvider()->checkUsername($username);
            } catch (\Exception $e) {
                return array('error_db', $this->getKernel()->trans('暂时无法注册，管理员正在努力修复中。（Ucenter配置或连接问题）'));
            }

            if ($result[0] != 'success') {
                return $result;
            }

            if (preg_match('/^1\d{10}$/', $username)) {
                return array('error_mismatching', '用户名不允许以1开头的11位纯数字!');
            }

            $avaliable = $this->getUserService()->isNicknameAvaliable($username);

            if (!$avaliable) {
                return array('error_duplicate', $this->getKernel()->trans('名称已存在!'));
            }
        }

        return array('success', '');
    }

    public function checkEmail($email)
    {
        try {
            $result = $this->getAuthProvider()->checkEmail($email);
        } catch (\Exception $e) {
            return array('error_db', $this->getKernel()->trans('暂时无法注册，管理员正在努力修复中。（Ucenter配置或连接问题）'));
        }

        if ($result[0] != 'success') {
            return $result;
        }

        $avaliable = $this->getUserService()->isEmailAvaliable($email);

        if (!$avaliable) {
            return array('error_duplicate', $this->getKernel()->trans('Email已存在!'));
        }

        return array('success', '');
    }

    public function checkMobile($mobile)
    {
        try {
            $result = $this->getAuthProvider()->checkMobile($mobile);
        } catch (\Exception $e) {
            return array('error_db', $this->getKernel()->trans('暂时无法注册，管理员正在努力修复中。（Ucenter配置或连接问题）'));
        }

        if ($result[0] != 'success') {
            return $result;
        }

        $avaliable = $this->getUserService()->isMobileAvaliable($mobile);

        if (!$avaliable) {
            return array('error_duplicate', $this->getKernel()->trans('手机号码已存在!'));
        }

        return array('success', '');
    }

    public function checkEmailOrMobile($emailOrMobile)
    {
        if (SimpleValidator::email($emailOrMobile)) {
            return $this->checkEmail($emailOrMobile);
        } elseif (SimpleValidator::mobile($emailOrMobile)) {
            return $this->checkMobile($emailOrMobile);
        } else {
            return array('error_dateInput', $this->getKernel()->trans('电子邮箱或者手机号码格式不正确!'));
        }
    }

    public function checkPassword($userId, $password)
    {
        if ($this->hasPartnerAuth()) {
            $providerName = $this->getAuthProvider()->getProviderName();
            $bind         = $this->getUserService()->getUserBindByTypeAndUserId($providerName, $userId);

            if (!$bind) {
                return $this->getUserService()->verifyPassword($userId, $password);
            }

            $checked = $this->getAuthProvider()->checkPassword($bind['fromId'], $password);

            if ($checked) {
                return true;
            }
        }

        return $this->getUserService()->verifyPassword($userId, $password);
    }

    public function checkPayPassword($userId, $payPassword)
    {
        return $this->getUserService()->verifyPayPassword($userId, $payPassword);
    }

    public function checkPartnerLoginById($userId, $password)
    {
        return $this->getAuthProvider()->checkLoginById($userId, $password);
    }

    public function checkPartnerLoginByNickname($nickname, $password)
    {
        return $this->getAuthProvider()->checkLoginByNickname($nickname, $password);
    }

    public function checkPartnerLoginByEmail($email, $password)
    {
        return $this->getAuthProvider()->checkLoginByEmail($email, $password);
    }

    public function getPartnerAvatar($userId, $size = 'middle')
    {
        $providerName = $this->getAuthProvider()->getProviderName();
        $bind         = $this->getUserService()->getUserBindByTypeAndUserId($providerName, $userId);

        if (!$bind) {
            return null;
        }

        return $this->getAuthProvider()->getAvatar($bind['fromId'], $size);
    }

    public function hasPartnerAuth()
    {
        return $this->getAuthProvider()->getProviderName() != 'default';
    }

    public function getPartnerName()
    {
        return $this->getAuthProvider()->getProviderName();
    }

    public function isRegisterEnabled()
    {
        $auth = $this->getSettingService()->get('auth');

        if ($auth && array_key_exists('register_mode', $auth)) {
            return (in_array($auth['register_mode'], array('email', 'mobile', 'email_or_mobile')));
        }

        return true;
    }

    protected function getAuthProvider()
    {
        if (!$this->partner) {
            $setting = $this->getSettingService()->get('user_partner');

            if (empty($setting) || empty($setting['mode'])) {
                $partner = 'default';
            } else {
                $partner = $setting['mode'];
            }

            if (!in_array($partner, array('discuz', 'phpwind', 'default'))) {
                throw new \InvalidArgumentException();
            }

            $class = substr(__NAMESPACE__, 0, -5)."\\AuthProvider\\".ucfirst($partner)."AuthProvider";

            $this->partner = new $class();
        }

        return $this->partner;
    }

    protected function getSensitiveService()
    {
        return $this->createService('SensitiveWord:Sensitive.SensitiveService');
    }

    protected function getUserService()
    {
        return $this->createService('User.UserService');
    }

    protected function getSettingService()
    {
        return $this->createService('System.SettingService');
    }

    protected function getLogService()
    {
        return $this->createService('System.LogService');
    }
}
