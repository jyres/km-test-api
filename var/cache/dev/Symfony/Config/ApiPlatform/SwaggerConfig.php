<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Swagger'.\DIRECTORY_SEPARATOR.'ApiKeysConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Swagger'.\DIRECTORY_SEPARATOR.'HttpAuthConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SwaggerConfig 
{
    private $persistAuthorization;
    private $versions;
    private $apiKeys;
    private $httpAuth;
    private $swaggerUiExtraConfiguration;
    private $_usedProperties = [];

    /**
     * Persist the SwaggerUI Authorization in the localStorage.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function persistAuthorization($value): static
    {
        $this->_usedProperties['persistAuthorization'] = true;
        $this->persistAuthorization = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function versions(mixed $value): static
    {
        $this->_usedProperties['versions'] = true;
        $this->versions = $value;

        return $this;
    }

    public function apiKeys(string $key, array $value = []): \Symfony\Config\ApiPlatform\Swagger\ApiKeysConfig
    {
        if (!isset($this->apiKeys[$key])) {
            $this->_usedProperties['apiKeys'] = true;
            $this->apiKeys[$key] = new \Symfony\Config\ApiPlatform\Swagger\ApiKeysConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "apiKeys()" has already been initialized. You cannot pass values the second time you call apiKeys().');
        }

        return $this->apiKeys[$key];
    }

    /**
     * Creates http security schemes for OpenAPI.
    */
    public function httpAuth(string $key, array $value = []): \Symfony\Config\ApiPlatform\Swagger\HttpAuthConfig
    {
        if (!isset($this->httpAuth[$key])) {
            $this->_usedProperties['httpAuth'] = true;
            $this->httpAuth[$key] = new \Symfony\Config\ApiPlatform\Swagger\HttpAuthConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "httpAuth()" has already been initialized. You cannot pass values the second time you call httpAuth().');
        }

        return $this->httpAuth[$key];
    }

    /**
     * To pass extra configuration to Swagger UI, like docExpansion or filter.
     * @default array (
     * )
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function swaggerUiExtraConfiguration(mixed $value = array (
    )): static
    {
        $this->_usedProperties['swaggerUiExtraConfiguration'] = true;
        $this->swaggerUiExtraConfiguration = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('persist_authorization', $value)) {
            $this->_usedProperties['persistAuthorization'] = true;
            $this->persistAuthorization = $value['persist_authorization'];
            unset($value['persist_authorization']);
        }

        if (array_key_exists('versions', $value)) {
            $this->_usedProperties['versions'] = true;
            $this->versions = $value['versions'];
            unset($value['versions']);
        }

        if (array_key_exists('api_keys', $value)) {
            $this->_usedProperties['apiKeys'] = true;
            $this->apiKeys = array_map(fn ($v) => new \Symfony\Config\ApiPlatform\Swagger\ApiKeysConfig($v), $value['api_keys']);
            unset($value['api_keys']);
        }

        if (array_key_exists('http_auth', $value)) {
            $this->_usedProperties['httpAuth'] = true;
            $this->httpAuth = array_map(fn ($v) => new \Symfony\Config\ApiPlatform\Swagger\HttpAuthConfig($v), $value['http_auth']);
            unset($value['http_auth']);
        }

        if (array_key_exists('swagger_ui_extra_configuration', $value)) {
            $this->_usedProperties['swaggerUiExtraConfiguration'] = true;
            $this->swaggerUiExtraConfiguration = $value['swagger_ui_extra_configuration'];
            unset($value['swagger_ui_extra_configuration']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['persistAuthorization'])) {
            $output['persist_authorization'] = $this->persistAuthorization;
        }
        if (isset($this->_usedProperties['versions'])) {
            $output['versions'] = $this->versions;
        }
        if (isset($this->_usedProperties['apiKeys'])) {
            $output['api_keys'] = array_map(fn ($v) => $v->toArray(), $this->apiKeys);
        }
        if (isset($this->_usedProperties['httpAuth'])) {
            $output['http_auth'] = array_map(fn ($v) => $v->toArray(), $this->httpAuth);
        }
        if (isset($this->_usedProperties['swaggerUiExtraConfiguration'])) {
            $output['swagger_ui_extra_configuration'] = $this->swaggerUiExtraConfiguration;
        }

        return $output;
    }

}
