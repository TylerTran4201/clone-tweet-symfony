<?php

namespace ContainerXrAl3xZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::statistical' => ['privates', '.service_locator.WS.x59_', 'get_ServiceLocator_WS_X59Service', true],
            'App\\Controller\\FollowerController::follow' => ['privates', '.service_locator.4llc441', 'get_ServiceLocator_4llc441Service', true],
            'App\\Controller\\FollowerController::unfollow' => ['privates', '.service_locator.WRvHM14', 'get_ServiceLocator_WRvHM14Service', true],
            'App\\Controller\\HelloController::index' => ['privates', '.service_locator.gsaaN3f', 'get_ServiceLocator_GsaaN3fService', true],
            'App\\Controller\\LikeController::like' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\LikeController::unlike' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.KV_IRIi', 'get_ServiceLocator_KVIRIiService', true],
            'App\\Controller\\MicroPostController::add' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\MicroPostController::addComment' => ['privates', '.service_locator.fh2tw1g', 'get_ServiceLocator_Fh2tw1gService', true],
            'App\\Controller\\MicroPostController::delete' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\MicroPostController::edit' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\MicroPostController::follows' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\MicroPostController::index' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\MicroPostController::showOne' => ['privates', '.service_locator.J46UgjH', 'get_ServiceLocator_J46UgjHService', true],
            'App\\Controller\\MicroPostController::topLiked' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\PostManageController::postManage' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\ProfileController::followers' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\ProfileController::follows' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\ProfileController::show' => ['privates', '.service_locator.VVCoPw4', 'get_ServiceLocator_VVCoPw4Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SettingsProfileController::profile' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Controller\\SettingsProfileController::profileImage' => ['privates', '.service_locator.ngC_2cH', 'get_ServiceLocator_NgC2cHService', true],
            'App\\Controller\\SettingsProfileController::theme' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Controller\\UserManageController::lockAccount' => ['privates', '.service_locator.dOokbUc', 'get_ServiceLocator_DOokbUcService', true],
            'App\\Controller\\UserManageController::setAdminRole' => ['privates', '.service_locator.dOokbUc', 'get_ServiceLocator_DOokbUcService', true],
            'App\\Controller\\UserManageController::unlockAccount' => ['privates', '.service_locator.dOokbUc', 'get_ServiceLocator_DOokbUcService', true],
            'App\\Controller\\UserManageController::userAdminManage' => ['privates', '.service_locator.QCLB1hM', 'get_ServiceLocator_QCLB1hMService', true],
            'App\\Controller\\UserManageController::userMange' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Controller\\UserManageController::userProfileManage' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AdminController:statistical' => ['privates', '.service_locator.WS.x59_', 'get_ServiceLocator_WS_X59Service', true],
            'App\\Controller\\FollowerController:follow' => ['privates', '.service_locator.4llc441', 'get_ServiceLocator_4llc441Service', true],
            'App\\Controller\\FollowerController:unfollow' => ['privates', '.service_locator.WRvHM14', 'get_ServiceLocator_WRvHM14Service', true],
            'App\\Controller\\HelloController:index' => ['privates', '.service_locator.gsaaN3f', 'get_ServiceLocator_GsaaN3fService', true],
            'App\\Controller\\LikeController:like' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\LikeController:unlike' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.KV_IRIi', 'get_ServiceLocator_KVIRIiService', true],
            'App\\Controller\\MicroPostController:add' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\MicroPostController:addComment' => ['privates', '.service_locator.fh2tw1g', 'get_ServiceLocator_Fh2tw1gService', true],
            'App\\Controller\\MicroPostController:delete' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\MicroPostController:edit' => ['privates', '.service_locator.aJrNPvK', 'get_ServiceLocator_AJrNPvKService', true],
            'App\\Controller\\MicroPostController:follows' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\MicroPostController:index' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\MicroPostController:showOne' => ['privates', '.service_locator.J46UgjH', 'get_ServiceLocator_J46UgjHService', true],
            'App\\Controller\\MicroPostController:topLiked' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\PostManageController:postManage' => ['privates', '.service_locator.cUgw6IB', 'get_ServiceLocator_CUgw6IBService', true],
            'App\\Controller\\ProfileController:followers' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\ProfileController:follows' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\ProfileController:show' => ['privates', '.service_locator.VVCoPw4', 'get_ServiceLocator_VVCoPw4Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SettingsProfileController:profile' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Controller\\SettingsProfileController:profileImage' => ['privates', '.service_locator.ngC_2cH', 'get_ServiceLocator_NgC2cHService', true],
            'App\\Controller\\SettingsProfileController:theme' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Controller\\UserManageController:lockAccount' => ['privates', '.service_locator.dOokbUc', 'get_ServiceLocator_DOokbUcService', true],
            'App\\Controller\\UserManageController:setAdminRole' => ['privates', '.service_locator.dOokbUc', 'get_ServiceLocator_DOokbUcService', true],
            'App\\Controller\\UserManageController:unlockAccount' => ['privates', '.service_locator.dOokbUc', 'get_ServiceLocator_DOokbUcService', true],
            'App\\Controller\\UserManageController:userAdminManage' => ['privates', '.service_locator.QCLB1hM', 'get_ServiceLocator_QCLB1hMService', true],
            'App\\Controller\\UserManageController:userMange' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Controller\\UserManageController:userProfileManage' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AdminController::statistical' => '?',
            'App\\Controller\\FollowerController::follow' => '?',
            'App\\Controller\\FollowerController::unfollow' => '?',
            'App\\Controller\\HelloController::index' => '?',
            'App\\Controller\\LikeController::like' => '?',
            'App\\Controller\\LikeController::unlike' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\MicroPostController::add' => '?',
            'App\\Controller\\MicroPostController::addComment' => '?',
            'App\\Controller\\MicroPostController::delete' => '?',
            'App\\Controller\\MicroPostController::edit' => '?',
            'App\\Controller\\MicroPostController::follows' => '?',
            'App\\Controller\\MicroPostController::index' => '?',
            'App\\Controller\\MicroPostController::showOne' => '?',
            'App\\Controller\\MicroPostController::topLiked' => '?',
            'App\\Controller\\PostManageController::postManage' => '?',
            'App\\Controller\\ProfileController::followers' => '?',
            'App\\Controller\\ProfileController::follows' => '?',
            'App\\Controller\\ProfileController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SettingsProfileController::profile' => '?',
            'App\\Controller\\SettingsProfileController::profileImage' => '?',
            'App\\Controller\\SettingsProfileController::theme' => '?',
            'App\\Controller\\UserManageController::lockAccount' => '?',
            'App\\Controller\\UserManageController::setAdminRole' => '?',
            'App\\Controller\\UserManageController::unlockAccount' => '?',
            'App\\Controller\\UserManageController::userAdminManage' => '?',
            'App\\Controller\\UserManageController::userMange' => '?',
            'App\\Controller\\UserManageController::userProfileManage' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:statistical' => '?',
            'App\\Controller\\FollowerController:follow' => '?',
            'App\\Controller\\FollowerController:unfollow' => '?',
            'App\\Controller\\HelloController:index' => '?',
            'App\\Controller\\LikeController:like' => '?',
            'App\\Controller\\LikeController:unlike' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\MicroPostController:add' => '?',
            'App\\Controller\\MicroPostController:addComment' => '?',
            'App\\Controller\\MicroPostController:delete' => '?',
            'App\\Controller\\MicroPostController:edit' => '?',
            'App\\Controller\\MicroPostController:follows' => '?',
            'App\\Controller\\MicroPostController:index' => '?',
            'App\\Controller\\MicroPostController:showOne' => '?',
            'App\\Controller\\MicroPostController:topLiked' => '?',
            'App\\Controller\\PostManageController:postManage' => '?',
            'App\\Controller\\ProfileController:followers' => '?',
            'App\\Controller\\ProfileController:follows' => '?',
            'App\\Controller\\ProfileController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SettingsProfileController:profile' => '?',
            'App\\Controller\\SettingsProfileController:profileImage' => '?',
            'App\\Controller\\SettingsProfileController:theme' => '?',
            'App\\Controller\\UserManageController:lockAccount' => '?',
            'App\\Controller\\UserManageController:setAdminRole' => '?',
            'App\\Controller\\UserManageController:unlockAccount' => '?',
            'App\\Controller\\UserManageController:userAdminManage' => '?',
            'App\\Controller\\UserManageController:userMange' => '?',
            'App\\Controller\\UserManageController:userProfileManage' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
