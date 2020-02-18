<?php

namespace easyAmazonAdv\SponsoredBrands\ProductTargeting;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['product_targeting'] = function ($app) {
            return new Client($app);
        };
    }
}
