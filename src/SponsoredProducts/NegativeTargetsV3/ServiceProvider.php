<?php

namespace easyAmazonAdv\SponsoredProducts\NegativeTargetsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['negativeTargetsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
