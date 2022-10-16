<?php

namespace ContainerQEoA9lx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3vGY7CRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3vGY7CR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3vGY7CR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\IngredientController::delete' => ['privates', '.service_locator.HRvitdh', 'get_ServiceLocator_HRvitdhService', true],
            'App\\Controller\\IngredientController::edit' => ['privates', '.service_locator.HRvitdh', 'get_ServiceLocator_HRvitdhService', true],
            'App\\Controller\\IngredientController::index' => ['privates', '.service_locator.tyXY8Q1', 'get_ServiceLocator_TyXY8Q1Service', true],
            'App\\Controller\\IngredientController::new' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\IngredientController:delete' => ['privates', '.service_locator.HRvitdh', 'get_ServiceLocator_HRvitdhService', true],
            'App\\Controller\\IngredientController:edit' => ['privates', '.service_locator.HRvitdh', 'get_ServiceLocator_HRvitdhService', true],
            'App\\Controller\\IngredientController:index' => ['privates', '.service_locator.tyXY8Q1', 'get_ServiceLocator_TyXY8Q1Service', true],
            'App\\Controller\\IngredientController:new' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\IngredientController::delete' => '?',
            'App\\Controller\\IngredientController::edit' => '?',
            'App\\Controller\\IngredientController::index' => '?',
            'App\\Controller\\IngredientController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\IngredientController:delete' => '?',
            'App\\Controller\\IngredientController:edit' => '?',
            'App\\Controller\\IngredientController:index' => '?',
            'App\\Controller\\IngredientController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
