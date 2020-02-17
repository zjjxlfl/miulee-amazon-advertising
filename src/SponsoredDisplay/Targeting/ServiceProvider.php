<?php

namespace easyAmazonAdv\SponsoredDisplay\Targeting;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['targeting'] = function ($app) {
            return new Client($app);
        };
    }
}
