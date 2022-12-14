<?php

namespace easyAmazonAdv\SponsoredProducts\ProductTargetingV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['productTargetingV3'] = function ($app) {
            return new Client($app);
        };
    }
}
