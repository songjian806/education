<?php

namespace AnywhereClient\AnywhereClientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Topxia\AdminBundle\Controller\BaseController;
use Topxia\Common\Paginator;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Yaml\Yaml;
use Topxia\Service\Util\FileUtil;
use Topxia\Service\Util\SystemUtil;

class SettingController extends BaseController
{

    public function indexAction(Request $request)
    {
        $fields = $request->query->all();

        $conditions = array();

        if (!empty($fields)) {
            $conditions = $fields;
        }
        if (!empty($conditions['keywordType'])) {
            $conditions[$conditions['keywordType']] = $conditions['keyword'];
        }

        $paginator = new Paginator(
            $this->get('request'),
            $this->getAnywhereServerService()->searchAnywhereServersCount($conditions),
            10
        );

        $servers = $this->getAnywhereServerService()->searchAnywhereServers(
            $conditions,
            array('createdTime', 'DESC'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render('AnywhereClientBundle:Setting:index.html.twig', array(
            'servers' => $servers,
            'paginator' => $paginator,
        ));
    }

    public function addAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getAnywhereServerService()->createAnywhereServer($fields);

            return $this->createJsonResponse(true);
        }

        return $this->render('AnywhereClientBundle:Setting:add-modal.html.twig', array(
        ));
    }

    public function editAction(Request $request, $id)
    {
        if ($request->getMethod() == 'POST') {
            $profile = $this->getAnywhereServerService()->updateAnywhereServer($id, $request->request->all());

            return $this->redirect($this->generateUrl('anywhereclient_manage_index'));
        }

        $server = $this->getAnywhereServerService()->getAnywhereServer($id);

        return $this->render('AnywhereClientBundle:Setting:edit-modal.html.twig', array(
            'server' => $server,
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $this->getAnywhereServerService()->deleteAnywhereServer($id);
        return $this->forward('AnywhereClientBundle:Setting:refresh');
    }

    public function showAction(Request $request, $id)
    {
        $server = $this->getAnywhereServerService()->getAnywhereServer($id);

        return $this->render('AnywhereClientBundle:Setting:show-modal.html.twig', array(
            'server' => $server,
        ));
    }

    public function refreshAction(Request $request)
    {
        $filesystem = new Filesystem();
        $paramPath = $this->getServiceKernel()->getParameter('kernel.root_dir').'/config/parameters.yml';
        $allServers = $this->getAllServers();
        $this->backupParameterFile($paramPath);
        $this->modifyParameterFile($allServers, $paramPath);
        $this->changeSetting($allServers);
        $this->removeCache();
        return $this->createJsonResponse(true);
    }

    private function getAllServers()
    {
        $servers = $this->getAnywhereServerService()->searchAnywhereServers(
            array(),
            array('createdTime', 'DESC'),
            0,
            1000
        );

        return $servers;
    }

    private function backupParameterFile($paramPath)
    {
        $bakup = $this->getServiceKernel()->getParameter('kernel.root_dir').'/config/parameters_bak.yml';
        if (!file_exists($bakup)) {
            $content = file_get_contents($paramPath);
            file_put_contents($bakup, $content);
        }
    }

    private function modifyParameterFile($servers, $paramPath)
    {
        $parameters = Yaml::parse($paramPath);
        $parameters['parameters']['oauth2_clients'] = array();
        foreach ($servers as $key => $server) {
            $type = 'anywhere_'.$server['id'];
            $parameters['parameters']['oauth2_clients'][$type] = array(
                  'name' => $server['serverName'].'账号',
                  'admin_name' => $server['serverName'].'登录接口',
                  'class' => 'AnywhereClient\Component\AnywhereOAuthClient',
                  'icon_class' => 'anywhere',
                  'icon_img' => 'bundles/anywhereclient/images/anywhere-icon.png',
                  'large_icon_img' => 'bundles/anywhereclient/images/anywhere-large-icon.png',
                  'key_setting_label' => 'App Key',
                  'secret_setting_label' => 'App Secret',
            );
        }
    
        $string = Yaml::dump($parameters, 4);
        file_put_contents($paramPath, $string);
    }

    private function changeSetting($servers)
    {
        $loginConnect = $this->getSettingService()->get('login_bind', array());
        foreach ($servers as $key => $server) {
            $type = 'anywhere_'.$server['id'];
            $loginConnect["{$type}_enabled"] = empty($server['locked']) ? 1 : 0;
            $loginConnect["{$type}_key"] = $server['clientId'];
            $loginConnect["{$type}_secret"] = $server['secretKey'];
            $loginConnect["{$type}_set_fill_account"] = 0;
        }
        $this->getSettingService()->set('login_bind', $loginConnect);
    }

    private function removeCache()
    {
        FileUtil::emptyDir(SystemUtil::getCachePath());
    }

    protected function getAnywhereServerService()
    {
        return $this->getServiceKernel()->createService('AnywhereClient:AnywhereServer.AnywhereServerService');
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }
}
