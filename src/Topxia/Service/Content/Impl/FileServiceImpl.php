<?php

namespace Topxia\Service\Content\Impl;

use Imagine\Imagick\Imagine;
use Topxia\Common\FileToolkit;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Content\FileService;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileServiceImpl extends BaseService implements FileService
{
    /**
     * {@inheritdoc}
     */
    public function getFiles($group, $start, $limit)
    {
        if (empty($group)) {
            return $this->getFileDao()->findFiles($start, $limit);
        }

        $group = $this->getGroupDao()->findGroupByCode($group);
        if (empty($group)) {
            return array();
        }

        return $this->getFileDao()->findFilesByGroupId($group['id'], $start, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function getFileCount($group = null)
    {
        if (empty($group)) {
            return $this->getFileDao()->findFileCount();
        }

        $group = $this->getGroupDao()->findGroupByCode($group);
        if (empty($group)) {
            return 0;
        }

        return $this->getFileDao()->findFileCountByGroupId($group['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function getTargetFiles($target)
    {
    }

    public function uploadFile($group, File $file, $target = null)
    {
        $user = $this->getCurrentUser();
        if (!$user->isLogin()) {
            throw $this->createServiceException($this->getKernel()->trans('用户尚未登录。'));
        }

        return $this->addFile($group, $file);
    }

    public function addFile($group, File $file)
    {
        $errors = FileToolkit::validateFileExtension($file);
        if ($errors) {
            @unlink($file->getRealPath());
            throw $this->createServiceException($this->getKernel()->trans('该文件格式，不允许上传。'));
        }
        $group = $this->getGroupDao()->findGroupByCode($group);

        $record           = array();
        $user             = $this->getCurrentUser();
        $record['userId'] = empty($user) || !$user->isLogin() ? 0 : $user['id'];

        if (!empty($group)) {
            $record['groupId'] = $group['id'];
        }
        // @todo fix it.
        $record['mime'] = '';
        // $record['mime'] = $file->getMimeType();
        $record['size']        = $file->getSize();
        $record['uri']         = $this->generateUri($group, $file);
        $record['createdTime'] = time();
        $record                = $this->getFileDao()->addFile($record);
        $record['file']        = $this->saveFile($file, $record['uri']);

        return $record;
    }

    protected function validateFileExtension(File $file, $extensions)
    {
        if ($file instanceof UploadedFile) {
            $filename = $file->getClientOriginalName();
        } else {
            $filename = $file->getFilename();
        }
        $errors = array();
        $regex  = '/\.('.preg_replace('/ +/', '|', preg_quote($extensions)).')$/i';
        if (!preg_match($regex, $filename)) {
            $errors[] = $this->getKernel()->trans('只允许上传以下扩展名的文件：').$extensions;
        }

        return $errors;
    }

    protected function validateFileIsImage(File $file)
    {
        $errors = array();

        $info = image_get_info($file->getFileUri());
        if (!$info || empty($info['extension'])) {
            $errors[] = $this->getKernel()->trans('只运行上传JPG、PNG、GIF格式的图片文件。');
        }

        return $errors;
    }

    protected function validateFileNameLength(File $file)
    {
        $errors = array();

        if (!$file->getFilename()) {
            $errors[] = $this->getKernel()->trans('文件名为空，请给文件取个名吧。');
        }
        if (strlen($file->getFilename()) > 240) {
            $errors[] = $this->getKernel()->trans('文件名超出了240个字符的限制，请重命名后再试。');
        }

        return $errors;
    }

    public function deleteFile($id)
    {
        $file = $this->getFileDao()->getFile($id);
        $this->deleteFileByUri($file['uri']);
    }

    public function deleteFileByUri($uri)
    {
        $this->getFileDao()->deleteFileByUri($uri);
        $parsed = $this->parseFileUri($uri);
        if (file_exists($parsed['fullpath'])) {
            @unlink($parsed['fullpath']);
        }
    }

    public function getFile($id)
    {
        return $this->getFileDao()->getFile($id);
    }

    public function bindFile($id, $target)
    {
    }

    public function bindFiles(array $ids, $target)
    {
    }

    public function unbindFile($id, $target)
    {
    }

    public function unbindFiles(array $ids, $target)
    {
    }

    public function unbindTargetFiles($target)
    {
    }

    public function getFileObject($fileId)
    {
        $fileInDao = $this->getFileDao()->getFile($fileId);
        $parsed    = $this->parseFileUri($fileInDao['uri']);

        return new File($parsed['fullpath']);
    }

    protected function saveFile($file, $uri)
    {
        $parsed = $this->parseFileUri($uri);
        if ($parsed['access'] == 'public') {
            $directory = $this->getKernel()->getParameter('topxia.upload.public_directory');
        } else {
            $directory = $this->getKernel()->getParameter('topxia.upload.private_directory');
        }

        if (!is_writable($directory)) {
            throw $this->createServiceException($this->getKernel()->trans('文件上传路径%directory%不可写，文件上传失败。', array('%directory%' => $directory)));
        }
        $directory .= '/'.$parsed['directory'];

        $newFile = $file->move($directory, $parsed['name']);

        $newFilePath = FileToolkit::imagerotatecorrect($newFile->getRealPath());
        if ($newFilePath) {
            return new File($newFilePath);
        }

        return $newFile;
    }

    protected function generateUri($group, $file)
    {
        if ($file instanceof UploadedFile) {
            $filename = $file->getClientOriginalName();
        } else {
            $filename = $file->getFilename();
        }

        $filenameParts = explode('.', $filename);
        $ext           = array_pop($filenameParts);
        if (empty($ext)) {
            throw $this->createServiceException($this->getKernel()->trans('获取文件扩展名失败！'));
        }

        $uri = ($group['public'] ? 'public://' : 'private://').$group['code'].'/';
        $uri .= date('Y').'/'.date('m-d').'/'.date('His');
        $uri .= substr(uniqid(), -6).substr(uniqid('', true), -6);
        $uri .= '.'.$ext;

        return $uri;
    }

    /**
     * {@inheritdoc}
     */
    public function parseFileUri($uri)
    {
        $parsed = array();
        $parts  = explode('://', $uri);
        if (empty($parts) || count($parts) != 2) {
            throw $this->createServiceException($this->getKernel()->trans('解析文件URI(%uri%)失败！', array('%uri%' => $uri)));
        }
        $parsed['access']    = $parts[0];
        $parsed['path']      = $parts[1];
        $parsed['directory'] = dirname($parsed['path']);
        $parsed['name']      = basename($parsed['path']);

        $directory = $this->getKernel()->getParameter('topxia.upload.public_directory');

        if ($parsed['access'] == 'public') {
            $directory = $this->getKernel()->getParameter('topxia.upload.public_directory');
        } else {
            $directory = $this->getKernel()->getParameter('topxia.upload.private_directory');
        }
        $parsed['fullpath'] = $directory.'/'.$parsed['path'];

        return $parsed;
    }

    public function getFileGroup($id)
    {
        return $this->getGroupDao()->getGroup($id);
    }

    public function getFileGroupByCode($code)
    {
        return $this->getGroupDao()->findGroupByCode($code);
    }

    public function getAllFileGroups()
    {
        return $this->getGroupDao()->findAllGroups();
    }

    public function addFileGroup($group)
    {
        return $this->getGroupDao()->addGroup($group);
    }

    public function deleteFileGroup($id)
    {
        return $this->getGroupDao()->deleteGroup($id);
    }

    public function thumbnailFile(array $file, array $options)
    {
        $options = array('quality' => 90, 'mode' => 'outbound') + $options;

        $imagine = new Imagine();

        $size = new \Imagine\Image\Box($options['width'], $options['height']);

        $uri = $this->parseFileUri($file['uri']);

        $savePath = tempnam(sys_get_temp_dir(), '_thumb_');
        unlink($savePath);

        $imagine->open($file['file']->getRealPath())
            ->thumbnail($size, $options['mode'])
            ->save($savePath.'.jpg', array('quality' => $options['quality']));

        $file = new File($savePath.'.jpg');

        $file = $this->uploadFile('thumb', $file);

        return $file;
    }

    public function getFilesByIds($ids)
    {
        $files = $this->getFileDao()->getFilesByIds($ids);

        return ArrayToolkit::index($files, 'id');
    }

    public function getImgFileMetaInfo($fileId, $scaledWidth, $scaledHeight)
    {
        if (empty($fileId)) {
            throw $this->createServiceException($this->getKernel()->trans('参数不正确'));
        }

        $file = $this->getFile($fileId);
        if (empty($file)) {
            throw $this->createServiceException($this->getKernel()->trans('文件不存在'));
        }

        $parsed = $this->parseFileUri($file['uri']);

        list($naturalSize, $scaledSize) = FileToolkit::getImgInfo($parsed['fullpath'], $scaledWidth, $scaledHeight);

        return array($parsed['path'], $naturalSize, $scaledSize);
    }

    protected function getSettingService()
    {
        return $this->createService('System.SettingService');
    }

    protected function getCourseService()
    {
        return $this->createService('Course.CourseService');
    }

    protected function getFileDao()
    {
        return $this->createDao('Content.FileDao');
    }

    protected function getGroupDao()
    {
        return $this->createDao('Content.FileGroupDao');
    }
}
