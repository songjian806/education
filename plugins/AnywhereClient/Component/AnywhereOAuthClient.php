<?php

namespace AnywhereClient\Component;

use Topxia\Component\OAuthClient\AbstractOAuthClient;
use Topxia\Service\Common\ServiceKernel;

class AnywhereOAuthClient extends AbstractOAuthClient
{
    public function getAuthorizeUrl($callbackUrl)
    {
        $server = $this->getServer();

        $params = array();
        $params['client_id'] = $this->config['key'];
        $params['response_type'] = 'code';
        $params['redirect_uri'] = $callbackUrl;

        return rtrim($server['serverUrl'], '/') . '/anywhere/oauth2/authorize?'.http_build_query($params);
    }

    public function getAccessToken($code, $callbackUrl)
    {
        $server = $this->getServer();

        $params = array();
        $params['client_id'] = $this->config['key'];
        $params['client_secret'] = $this->config['secret'];
        $params['authorization_code'] = 'code';
        $params['redirect_uri'] = $callbackUrl;
        $params['userId'] = $code;
        $params['sign'] = $this->signParams($params, $this->config['secret']);

        $data = $this->getRequest(rtrim($server['serverUrl'], '/') . '/anywhere/oauth2/access_token', $params);

        $rawToken = json_decode($data, true);

        $this->checkTokenError($rawToken);
        
        $token = array(
            'token' => $rawToken['access_token'],
            'userId' => $rawToken['userId'],
            'expiredTime' => $rawToken['expiredTime'],
        );

        return $token;
    }

    public function getUserInfo($token)
    {
        $server = $this->getServer();

        $params = array();
        $params['access_token'] = $token['token'];
        $data = $this->getRequest(rtrim($server['serverUrl'], '/') . '/anywhere/oauth2/userinfo', $params);
        $userInfo = json_decode($data, true);
       
        $this->checkUserError($userInfo);

        return $this->convertUserInfo($userInfo);
    }

    protected function convertUserInfo($rawUserInfo)
    {
        $info = array();
        $info['id'] = $rawUserInfo['id'];
        $info['name'] = $rawUserInfo['nickname'];
        $info['smallAvatar'] = $rawUserInfo['smallAvatar'];
        $info['largeAvatar'] = $rawUserInfo['largeAvatar'];

        return $info;
    }

    private function parseUrl()
    {
        $req_url = $_SERVER['REQUEST_URI'];
        $temp = explode('?', $req_url);
        $type = substr($temp[0], 12);
        $temp = explode('_', $type);
        $serverId = $temp[1];

        return $serverId;
    }

    private function getServer()
    {
        $serverId = $this->parseUrl();

        return $this->getAnywhereServerService()->getAnywhereServer($serverId);
    }

    private function signParams($params, $secretKey)
    {

        ksort($params);
        $params = array_filter($params);

        $sign = '';
        foreach ($params as $key => $value) {
            $sign .= $key.'='.$value.'&';
        }
        $sign = substr($sign, 0, - 1);
        $sign .= $secretKey;
        return md5($sign);
    }

    protected function getAnywhereServerService()
    {
        return ServiceKernel::instance()->createService('AnywhereClient:AnywhereServer.AnywhereServerService');
    }

    private function checkTokenError($rawToken)
    {
        if (array_key_exists('error', $rawToken)) {
            throw new \Exception($rawToken['error']);
        }
    }

    private function checkUserError($userInfo)
    {
        if (!array_key_exists('error', $userInfo)) {
            return;
        }
        throw new \Exception($userInfo['error']);
    }
}
