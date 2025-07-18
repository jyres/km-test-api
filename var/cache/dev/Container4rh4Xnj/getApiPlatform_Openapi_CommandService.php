<?php

namespace Container4rh4Xnj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_CommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.command' shared service.
     *
     * @return \ApiPlatform\OpenApi\Command\OpenApiCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SignalableCommandInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'openapi'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'OpenApiCommand.php';

        $container->privates['api_platform.openapi.command'] = $instance = new \ApiPlatform\OpenApi\Command\OpenApiCommand(($container->privates['api_platform.openapi.factory'] ?? $container->load('getApiPlatform_Openapi_FactoryService')), ($container->privates['serializer'] ?? self::getSerializerService($container)));

        $instance->setName('api:openapi:export');

        return $instance;
    }
}
