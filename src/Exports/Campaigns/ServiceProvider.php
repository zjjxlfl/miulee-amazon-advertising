<?php

namespace easyAmazonAdv\Exports\Campaigns;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['campaigns'] = function ($app) {
            return new Client($app);
        };
    }
}
