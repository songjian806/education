<?php
namespace Topxia\WebBundle\Controller;

use Topxia\WebBundle\Util\UploaderToken;
use Symfony\Component\HttpFoundation\Request;

class AttachmentController extends BaseController
{
    public function uploadAction(Request $request)
    {
        $query  = $request->query->all();
        $parser = new UploaderToken();
        $params = $parser->parse($query['token']);

        if (!$params) {
            return $this->createJsonResponse(array('error' => '上传授权码不正确，请重试！'));
        }

        return $this->render('TopxiaWebBundle:Attachment:upload-modal.html.twig', array(
            'token'      => $query['token'],
            'idsClass'   => $query['idsClass'],
            'listClass'  => $query['listClass'],
            'targetType' => $params['targetType']
        ));
    }

    public function formFieldsAction(Request $request, $targetType, $targetId)
    {
        $targets     = explode(".", $targetType);
        $type        = 'attachment';
        $attachments = $this->getUploadFileService()->findUseFilesByTargetTypeAndTargetIdAndType($targetType, $targetId, $type);

        return $this->render('TopxiaWebBundle:Attachment:form-fields.html.twig', array(
            'target'      => array_shift($targets),
            'targetType'  => $targetType,
            'fileType'    => array_pop($targets),
            'type'        => 'attachment',
            'useType'     => $request->query->get('useType', false),
            'showLabel'   => $request->query->get('showLabel', true),
            'attachments' => $attachments
        ));
    }

    public function listAction(Request $request, $targetType, $targetId)
    {
        $type = 'attachment';
        return $this->render('TopxiaWebBundle:Attachment:list.html.twig', array(
            'attachments' => $this->getUploadFileService()->findUseFilesByTargetTypeAndTargetIdAndType($targetType, $targetId, $type)
        ));
    }

    public function previewAction(Request $request, $id)
    {
        $user = $this->getCurrentUser();
        if (!$user->isLogin()) {
            throw $this->createAccessDeniedException();
        }
        $previewType = $request->query->get('type', 'attachment');
        if ($previewType == 'attachment') {
            $attachment = $this->getUploadFileService()->getUseFile($id);
            $file       = $this->getUploadFileService()->getFile($attachment['fileId']);
        } else {
            $file = $this->getUploadFileService()->getFile($id);
        }

        if ($file['storage'] == 'cloud') {
            return $this->forward('TopxiaAdminBundle:CloudFile:preview', array(
                'request'  => $request,
                'globalId' => $file['globalId']
            ));
        }

        return $this->render('MaterialLibBundle:Web:preview.html.twig', array(
            'file' => $file
        ));
    }

    public function downloadAction(Request $request, $id)
    {
        $user = $this->getCurrentUser();
        if (!$user->isLogin()) {
            throw $this->createAccessDeniedException();
        }
        $attachment = $this->getUploadFileService()->getUseFile($id);

        if (empty($attachment)) {
            throw $this->createNotFoundException();
        }

        if ($attachment['type'] != 'attachment') {
            return $this->createMessageResponse('error', $this->trans('无权下载该资料'));
        }

        $file = $this->getUploadFileService()->getFile($attachment['fileId']);
        return $this->forward('TopxiaWebBundle:UploadFile:download', array(
            'request' => $request,
            'fileId'  => $file['id']
        ));
    }

     public function deleteAction(Request $request, $id)
    {
        $previewType = $request->query->get('type', 'attachment');
        if ($previewType == 'attachment') {
            $this->getUploadFileService()->deleteUseFile($id);
        } else {
            if ($this->getUploadFileService()->canManageFile($id)) {
                $this->getUploadFileService()->deleteFile($id);
            } else {
                throw $this->createAccessDeniedException('opteration forbiddened');
            }
        }
        return $this->createJsonResponse(array('msg' => 'ok'));
    }

    protected function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('File.UploadFileService');
    }
}
