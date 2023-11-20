<?php

namespace easyAmazonAdv\SponsoredBrands\NegativeTargetsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['NegativeTargetsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
