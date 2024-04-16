<?php

namespace easyAmazonAdv\SponsoredProducts\ProductAdsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['productAdsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
