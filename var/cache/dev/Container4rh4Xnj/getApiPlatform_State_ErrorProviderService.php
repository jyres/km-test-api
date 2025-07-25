<?php

namespace Container4rh4Xnj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_State_ErrorProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state.error_provider' shared service.
     *
     * @return \ApiPlatform\State\ErrorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'state'.\DIRECTORY_SEPARATOR.'ErrorProvider.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container));

        if (isset($container->privates['api_platform.state.error_provider'])) {
            return $container->privates['api_platform.state.error_provider'];
        }

        return $container->privates['api_platform.state.error_provider'] = new \ApiPlatform\State\ErrorProvider(true, ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)), $a);
    }
}
