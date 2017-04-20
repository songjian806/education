<?php
namespace Topxia\Service\User;

use Permission\Common\PermissionBuilder;
use Topxia\Service\Common\ServiceKernel;
use Topxia\WebBundle\Handler\AuthenticationHelper;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class UserProvider implements UserProviderInterface
{
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function loadUserByUsername($username)
    {
        $user = $this->getUserService()->getUserByLoginField($username);

        if (empty($user)) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
        }

        $forbidden = AuthenticationHelper::checkLoginForbidden($this->container->get('request'));
        if ($forbidden['status'] == 'error') {
            throw new AuthenticationException($forbidden['message']);
        }
        $user['currentIp'] = $this->container->get('request')->getClientIp();
        $user['org']       = $this->getOrgService()->getOrgByOrgCode($user['orgCode']);
        $currentUser       = new CurrentUser();
        $currentUser->fromArray($user);
        $currentUser->setPermissions(PermissionBuilder::instance()->getPermissionsByRoles($currentUser->getRoles()));

        ServiceKernel::instance()->setCurrentUser($currentUser);
        return $currentUser;
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof CurrentUser) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Topxia\Service\User\CurrentUser';
    }

    protected function getRoleService()
    {
        return ServiceKernel::instance()->createService('Permission:Role.RoleService');
    }

    protected function getUserService()
    {
        return ServiceKernel::instance()->createService('User.UserService');
    }

    protected function getOrgService()
    {
        return ServiceKernel::instance()->createService('Org:Org.OrgService');
    }
}
