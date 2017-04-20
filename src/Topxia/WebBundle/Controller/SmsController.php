<?php

namespace Topxia\WebBundle\Controller;

use Topxia\Common\SmsToolkit;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\StringToolkit;
use Symfony\Component\HttpFoundation\Request;

class SmsController extends BaseController
{
    public function prepareAction(Request $request, $targetType, $id)
    {
        $item                  = array();
        $mobileNum             = 0;
        $mobileNeedVerified    = false;
        $url                   = '';
        $smsType               = 'sms_'.$targetType.'_publish';

        if ($targetType == 'classroom') {
            $item                  = $this->getClassroomService()->getClassroom($id);
            $mobileNum = $this->getUserService()->countUserHasMobile($mobileNeedVerified);
            $url                   = $this->generateUrl('classroom_show', array('id' => $id));
        } elseif ($targetType == 'course') {
            $item = $this->getCourseService()->getCourse($id);
            $url  = $this->generateUrl('course_show', array('id' => $id));

            if ($item['parentId']) {
                $classroom = $this->getClassroomService()->findClassroomByCourseId($item['id']);

                if ($classroom) {
                    $mobileNum = $this->getClassroomService()->findMobileVerifiedMemberCountByClassroomId($classroom['classroomId'], 1);
                }
            } else {
                $mobileNum = $this->getUserService()->countUserHasMobile($mobileNeedVerified);
            }
        }

        $item['title'] = StringToolkit::cutter($item['title'], 20, 15, 4);
        return $this->render('TopxiaWebBundle:Sms:sms-send.html.twig', array(
            'item'       => $item,
            'targetType' => $targetType,
            'url'        => $url,
            'count'      => $mobileNum,
            'index'      => 1,
            'isOpen'     => $this->getSmsService()->isOpen($smsType)
        ));
    }

    public function sendAction(Request $request, $targetType, $id)
    {
        $smsType     = 'sms_'.$targetType.'_publish';
        $index       = $request->query->get('index');
        $onceSendNum = 100;
        $url         = $request->query->get('url');
        $count       = $request->query->get('count');
        $parameters  = array();
        $mobileNeedVerified    = false;

        if ($targetType == 'classroom') {
            $classroom                     = $this->getClassroomService()->getClassroom($id);
            $classroomSetting              = $this->getSettingService()->get("classroom");
            $classroomName                 = isset($classroomSetting['name']) ? $classroomSetting['name'] : $this->trans('班级');
            $classroom['title']            = StringToolkit::cutter($classroom['title'], 20, 15, 4);
            $parameters['classroom_title'] = $classroomName.'：《'.$classroom['title'].'》';
            $description                   = $parameters['classroom_title'].$this->trans('发布');
            $students                      = $this->getUserService()->findUsersHasMobile($index, $onceSendNum, $mobileNeedVerified);
        } elseif ($targetType == 'course') {
            $course                     = $this->getCourseService()->getCourse($id);
            $course['title']            = StringToolkit::cutter($course['title'], 20, 15, 4);
            $parameters['course_title'] = $this->trans('课程').'：《'.$course['title'].'》';
            $description                = $parameters['course_title'].$this->trans('发布');

            if ($course['parentId']) {
                $classroom = $this->getClassroomService()->findClassroomByCourseId($course['id']);

                if ($classroom) {
                    $count    = $this->getClassroomService()->searchMemberCount(array('classroomId' => $classroom['classroomId']));
                    $students = $this->getClassroomService()->searchMembers(array('classroomId' => $classroom['classroomId']), array('createdTime', 'Desc'), $index, $onceSendNum);
                }
            } else {
                $students = $this->getUserService()->findUsersHasMobile($index, $onceSendNum, $mobileNeedVerified);
            }
        }

        if (!$this->getSmsService()->isOpen($smsType)) {
            throw new \RuntimeException($this->trans('请先开启相关设置!'));
        }

        $parameters['url'] = $url.' ';
        if (!empty($students)) {
            if ($targetType == 'course' && $course['parentId']) {
                $studentIds = ArrayToolkit::column($students, 'userId');
            } else {
                $studentIds = ArrayToolkit::column($students, 'id');
            }

            $result = $this->getSmsService()->smsSend($smsType, $studentIds, $description, $parameters);
        }

        if ($count > $index + $onceSendNum) {
            return $this->createJsonResponse(array('index' => $index + $onceSendNum, 'process' => intval(($index + $onceSendNum) / $count * 100)));
        } else {
            return $this->createJsonResponse(array('status' => 'success', 'process' => 100));
        }
    }

    public function changeLinkAction(Request $request)
    {
        $url = $request->getHost();
        $url .= $request->query->get('url');

        $shortUrl = SmsToolkit::getShortLink($url);
        $url      = empty($shortUrl) ? 'http://'.$url : $shortUrl;

        return $this->createJsonResponse(array('url' => $url.' '));
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }

    protected function getSmsService()
    {
        return $this->getServiceKernel()->createService('Sms.SmsService');
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }
}
