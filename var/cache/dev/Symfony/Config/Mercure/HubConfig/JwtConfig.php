<?php

namespace Symfony\Config\Mercure\HubConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class JwtConfig 
{
    private $value;
    private $provider;
    private $factory;
    private $publish;
    private $subscribe;
    private $secret;
    private $passphrase;
    private $algorithm;
    
    /**
     * JSON Web Token to use to publish to this hub.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function value($value): static
    {
        $this->value = $value;
    
        return $this;
    }
    
    /**
     * The ID of a service to call to provide the JSON Web Token.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): static
    {
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * The ID of a service to call to create the JSON Web Token.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factory($value): static
    {
        $this->factory = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function publish(ParamConfigurator|array $value): static
    {
        $this->publish = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function subscribe(ParamConfigurator|array $value): static
    {
        $this->subscribe = $value;
    
        return $this;
    }
    
    /**
     * The JWT Secret to use.
     * @example !ChangeMe!
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secret($value): static
    {
        $this->secret = $value;
    
        return $this;
    }
    
    /**
     * The JWT secret passphrase.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function passphrase($value): static
    {
        $this->passphrase = $value;
    
        return $this;
    }
    
    /**
     * The algorithm to use to sign the JWT
     * @default 'hmac.sha256'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function algorithm($value): static
    {
        $this->algorithm = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['value'])) {
            $this->value = $value['value'];
            unset($value['value']);
        }
    
        if (isset($value['provider'])) {
            $this->provider = $value['provider'];
            unset($value['provider']);
        }
    
        if (isset($value['factory'])) {
            $this->factory = $value['factory'];
            unset($value['factory']);
        }
    
        if (isset($value['publish'])) {
            $this->publish = $value['publish'];
            unset($value['publish']);
        }
    
        if (isset($value['subscribe'])) {
            $this->subscribe = $value['subscribe'];
            unset($value['subscribe']);
        }
    
        if (isset($value['secret'])) {
            $this->secret = $value['secret'];
            unset($value['secret']);
        }
    
        if (isset($value['passphrase'])) {
            $this->passphrase = $value['passphrase'];
            unset($value['passphrase']);
        }
    
        if (isset($value['algorithm'])) {
            $this->algorithm = $value['algorithm'];
            unset($value['algorithm']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->value) {
            $output['value'] = $this->value;
        }
        if (null !== $this->provider) {
            $output['provider'] = $this->provider;
        }
        if (null !== $this->factory) {
            $output['factory'] = $this->factory;
        }
        if (null !== $this->publish) {
            $output['publish'] = $this->publish;
        }
        if (null !== $this->subscribe) {
            $output['subscribe'] = $this->subscribe;
        }
        if (null !== $this->secret) {
            $output['secret'] = $this->secret;
        }
        if (null !== $this->passphrase) {
            $output['passphrase'] = $this->passphrase;
        }
        if (null !== $this->algorithm) {
            $output['algorithm'] = $this->algorithm;
        }
    
        return $output;
    }

}
