<?php

namespace ContainerZJPxYrx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NhevKzzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nhevKzz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nhevKzz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdresseLivraisonController::delete' => ['privates', '.service_locator.pGJA1q6', 'get_ServiceLocator_PGJA1q6Service', true],
            'App\\Controller\\AdresseLivraisonController::edit' => ['privates', '.service_locator.pGJA1q6', 'get_ServiceLocator_PGJA1q6Service', true],
            'App\\Controller\\AdresseLivraisonController::index' => ['privates', '.service_locator.ZHkJd_K', 'get_ServiceLocator_ZHkJdKService', true],
            'App\\Controller\\AdresseLivraisonController::show' => ['privates', '.service_locator.pGJA1q6', 'get_ServiceLocator_PGJA1q6Service', true],
            'App\\Controller\\ClientController::delete' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController::edit' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController::index' => ['privates', '.service_locator.CZ1jTUx', 'get_ServiceLocator_CZ1jTUxService', true],
            'App\\Controller\\ClientController::show' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\LandingPageController::api' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\LandingPageController::apiPaid' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\LandingPageController::index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\LandingPageController::paypal' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\LandingPageController::sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\LandingPageController::stripe' => ['privates', '.service_locator.vSHqZCT', 'get_ServiceLocator_VSHqZCTService', true],
            'App\\Controller\\ProduitController::delete' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController::edit' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\ProduitController::show' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdresseLivraisonController:delete' => ['privates', '.service_locator.pGJA1q6', 'get_ServiceLocator_PGJA1q6Service', true],
            'App\\Controller\\AdresseLivraisonController:edit' => ['privates', '.service_locator.pGJA1q6', 'get_ServiceLocator_PGJA1q6Service', true],
            'App\\Controller\\AdresseLivraisonController:index' => ['privates', '.service_locator.ZHkJd_K', 'get_ServiceLocator_ZHkJdKService', true],
            'App\\Controller\\AdresseLivraisonController:show' => ['privates', '.service_locator.pGJA1q6', 'get_ServiceLocator_PGJA1q6Service', true],
            'App\\Controller\\ClientController:delete' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController:edit' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController:index' => ['privates', '.service_locator.CZ1jTUx', 'get_ServiceLocator_CZ1jTUxService', true],
            'App\\Controller\\ClientController:show' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\LandingPageController:api' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\LandingPageController:apiPaid' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\LandingPageController:index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\LandingPageController:paypal' => ['privates', '.service_locator.H0QGoQM', 'get_ServiceLocator_H0QGoQMService', true],
            'App\\Controller\\LandingPageController:sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\LandingPageController:stripe' => ['privates', '.service_locator.vSHqZCT', 'get_ServiceLocator_VSHqZCTService', true],
            'App\\Controller\\ProduitController:delete' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController:edit' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\ProduitController:show' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdresseLivraisonController::delete' => '?',
            'App\\Controller\\AdresseLivraisonController::edit' => '?',
            'App\\Controller\\AdresseLivraisonController::index' => '?',
            'App\\Controller\\AdresseLivraisonController::show' => '?',
            'App\\Controller\\ClientController::delete' => '?',
            'App\\Controller\\ClientController::edit' => '?',
            'App\\Controller\\ClientController::index' => '?',
            'App\\Controller\\ClientController::show' => '?',
            'App\\Controller\\LandingPageController::api' => '?',
            'App\\Controller\\LandingPageController::apiPaid' => '?',
            'App\\Controller\\LandingPageController::index' => '?',
            'App\\Controller\\LandingPageController::paypal' => '?',
            'App\\Controller\\LandingPageController::sendEmail' => '?',
            'App\\Controller\\LandingPageController::stripe' => '?',
            'App\\Controller\\ProduitController::delete' => '?',
            'App\\Controller\\ProduitController::edit' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\ProduitController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdresseLivraisonController:delete' => '?',
            'App\\Controller\\AdresseLivraisonController:edit' => '?',
            'App\\Controller\\AdresseLivraisonController:index' => '?',
            'App\\Controller\\AdresseLivraisonController:show' => '?',
            'App\\Controller\\ClientController:delete' => '?',
            'App\\Controller\\ClientController:edit' => '?',
            'App\\Controller\\ClientController:index' => '?',
            'App\\Controller\\ClientController:show' => '?',
            'App\\Controller\\LandingPageController:api' => '?',
            'App\\Controller\\LandingPageController:apiPaid' => '?',
            'App\\Controller\\LandingPageController:index' => '?',
            'App\\Controller\\LandingPageController:paypal' => '?',
            'App\\Controller\\LandingPageController:sendEmail' => '?',
            'App\\Controller\\LandingPageController:stripe' => '?',
            'App\\Controller\\ProduitController:delete' => '?',
            'App\\Controller\\ProduitController:edit' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\ProduitController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
