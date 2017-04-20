<?php
namespace Permission\Service\Role\Impl;

use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Permission\Common\PermissionBuilder;
use Permission\Service\Role\RoleService;
use Topxia\Common\Exception\AccessDeniedException;
use Topxia\Common\Exception\UnexpectedValueException;

class RoleServiceImpl extends BaseService implements RoleService
{
    public function getRole($id)
    {
        return $this->getRoleDao()->getRole($id);
    }

    public function getRoleByCode($code)
    {
        return $this->getRoleDao()->getRoleByCode($code);
    }

    public function createRole($role)
    {
        $role['createdTime']   = time();
        $user                  = $this->getCurrentUser();
        $role['createdUserId'] = $user['id'];
        $role                  = ArrayToolkit::parts($role, array('name', 'code', 'data', 'createdTime', 'createdUserId'));

        if (!ArrayToolkit::requireds($role, array('name', 'code'))) {
            throw new UnexpectedValueException('缺乏必要字段');
        }

        $this->getLogService()->info('role', 'create_role', '新增权限用户组"'.$role['name'].'"', $role);
        return $this->getRoleDao()->createRole($role);
    }

    public function updateRole($id, array $fields)
    {
        $this->checkChangeRole($id);
        $fields = ArrayToolkit::parts($fields, array('name', 'code', 'data'));

        if (isset($fields['code'])) {
            unset($fields['code']);
        }

        $fields['updatedTime'] = time();
        $role                  = $this->getRoleDao()->updateRole($id, $fields);
        $this->getLogService()->info('role', 'update_role', '更新权限用户组"'.$role['name'].'"', $role);
        return $role;
    }

    public function deleteRole($id)
    {
        $role = $this->checkChangeRole($id);
        if (!empty($role)) {
            $this->getRoleDao()->deleteRole($id);
            $this->getLogService()->info('role', 'delete_role', '删除橘色"'.$role['name'].'"', $role);
        }
    }

    public function searchRoles($conditions, $sort, $start, $limit)
    {
        $conditions = $this->prepareSearchConditions($conditions);

        switch ($sort) {
            case 'created':
                $sort = array('createdTime', 'DESC');
                break;
            case 'createdByAsc':
                $sort = array('createdTime', 'ASC');
                break;

            default:
                $sort = array('createdTime', 'DESC');
                break;
        }
        return $this->getRoleDao()->searchRoles($conditions, $sort, $start, $limit);
    }

    public function searchRolesCount($conditions)
    {
        $conditions = $this->prepareSearchConditions($conditions);
        return $this->getRoleDao()->searchRolesCount($conditions);
    }

    public function findRolesByCodes(array $codes)
    {
        if (empty($codes)) {
            return array();
        }

        return $this->getRoleDao()->findRolesByCodes($codes);
    }

    public function refreshRoles()
    {
        $getAllRole         = PermissionBuilder::instance()->getOriginPermissionTree(true);
        $getSuperAdminRoles = $getAllRole->column('code');
        $adminForbidRoles   = array('admin_user_avatar', 'admin_user_change_password', 'admin_my_cloud', 'admin_cloud_video_setting', 'admin_edu_cloud_sms', 'admin_edu_cloud_search_setting', 'admin_setting_cloud_attachment', 'admin_setting_cloud', 'admin_system');

        $getAdminForbidRoles = array();
        foreach ($adminForbidRoles as $adminForbidRole) {
            $adminRole = $getAllRole->find(function ($tree) use ($adminForbidRole) {
                return $tree->data['code'] === $adminForbidRole;
            });

            if (is_null($adminRole)) {
                continue;
            }

            $getAdminForbidRoles = array_merge($adminRole->column('code'), $getAdminForbidRoles);
        }

        $getTeacherRoles = $getAllRole->find(function ($tree) {
            return $tree->data['code'] === 'web';
        });
        $getTeacherRoles = $getTeacherRoles->column('code');

        $roles = array(
            'ROLE_USER'        => array(),
            'ROLE_TEACHER'     => $getTeacherRoles,
            'ROLE_ADMIN'       => array_diff($getSuperAdminRoles, $getAdminForbidRoles),
            'ROLE_SUPER_ADMIN' => $getSuperAdminRoles
        );

        foreach ($roles as $key => $value) {
            $userRole = $this->getRoleDao()->getRoleByCode($key);

            if (empty($userRole)) {
                $this->initCreateRole($key, array_values($value));
            } else {
                $this->getRoleDao()->updateRole($userRole['id'], array('data' => array_values($value)));
            }
        }
    }

    private function initCreateRole($code, $role)
    {
        $userRoles = array(
            'ROLE_SUPER_ADMIN' => array('name' => '超级管理员', 'code' => 'ROLE_SUPER_ADMIN'),
            'ROLE_ADMIN'       => array('name' => '管理员', 'code' => 'ROLE_ADMIN'),
            'ROLE_TEACHER'     => array('name' => '教师', 'code' => 'ROLE_TEACHER'),
            'ROLE_USER'        => array('name' => '学员', 'code' => 'ROLE_USER')
        );
        $userRole = $userRoles[$code];

        $userRole['data']          = $role;
        $userRole['createdTime']   = time();
        $userRole['createdUserId'] = $this->getCurrentUser()->getId();
        $this->getLogService()->info('role', 'init_create_role', '初始化四个角色"'.$userRole['name'].'"', $userRole);
        return $this->getRoleDao()->createRole($userRole);
    }

    private function checkChangeRole($id)
    {
        $role           = $this->getRoleDao()->getRole($id);
        $notUpdateRoles = array('ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_TEACHER', 'ROLE_USER');
        if (in_array($role['code'], $notUpdateRoles)) {
            throw new AccessDeniedException('该权限不能修改！');
        }
        return $role;
    }

    protected function prepareSearchConditions($conditions)
    {
        if (!empty($conditions['nextExcutedStartTime']) && !empty($conditions['nextExcutedEndTime'])) {
            $conditions['nextExcutedStartTime'] = strtotime($conditions['nextExcutedStartTime']);
            $conditions['nextExcutedEndTime']   = strtotime($conditions['nextExcutedEndTime']);
        } else {
            unset($conditions['nextExcutedStartTime']);
            unset($conditions['nextExcutedEndTime']);
        }

        if (empty($conditions['cycle'])) {
            unset($conditions['cycle']);
        }

        if (empty($conditions['name'])) {
            unset($conditions['name']);
        } else {
            $conditions['nameLike'] = '%'.$conditions['name'].'%';
        }

        return $conditions;
    }

    public function isRoleNameAvalieable($name, $exclude = null)
    {
        if (empty($name)) {
            return false;
        }

        if ($name == $exclude) {
            return true;
        }

        $role = $this->getRoleDao()->getRoleByName($name);
        return $role ? false : true;
    }

    public function isRoleCodeAvalieable($code, $exclude = null)
    {
        // if (empty($code) || in_array($code, array('ROLE_USER', 'ROLE_TEACHER', 'ROLE_ADMIN', 'ROLE_SUPER_ADMIN'))) {
        //     return false;
        // }

        if ($code == $exclude) {
            return true;
        }

        $tag = $this->getRoleByCode($code);

        return $tag ? false : true;
    }

    protected function getRoleDao()
    {
        return $this->createDao('Permission:Role.RoleDao');
    }

    protected function getLogService()
    {
        return $this->createService('System.LogService');
    }

    protected function getUserService()
    {
        return $this->createService('User.UserService');
    }
}
