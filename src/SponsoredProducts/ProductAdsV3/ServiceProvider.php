<?php

namespace easyAmazonAdv\SponsoredProducts\ProductAdsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['product_ads_v3'] = function ($app) {
            return new Client($app);
        };
    }
}
