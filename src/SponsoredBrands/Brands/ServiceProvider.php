<?php

namespace easyAmazonAdv\SponsoredBrands\Brands;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['Brands'] = function ($app) {
            return new Client($app);
        };
    }
}
