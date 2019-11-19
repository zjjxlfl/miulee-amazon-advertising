<?php

namespace easyAmazonAdv\BaseService;

use easyAmazonAdv\Kernel\Provider\ClientServiceProvider;
use easyAmazonAdv\Kernel\Support\Collection;
use Pimple\Container;

class Application extends Container
{
    protected $providers = [
        ClientServiceProvider::class,
        AccessToken\ServiceProvider::class,
        Profiles\ServiceProvider::class,
        Portfolios\ServiceProvider::class,
    ];

    public function __construct($config = [], array $values = [])
    {
        parent::__construct($values);
        $this['config'] = function () use ($config) {
            return new Collection($config);
        };
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    public function __get($name)
    {
        return $this[$name];
    }
}
