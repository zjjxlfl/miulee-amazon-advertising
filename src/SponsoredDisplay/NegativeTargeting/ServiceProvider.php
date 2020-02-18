<?php

namespace easyAmazonAdv\SponsoredDisplay\NegativeTargeting;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['negative_targeting'] = function ($app) {
            return new Client($app);
        };
    }
}
