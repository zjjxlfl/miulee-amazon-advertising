<?php

namespace easyAmazonAdv\Exports\AdGroups;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['adGroups'] = function ($app) {
            return new Client($app);
        };
    }
}
