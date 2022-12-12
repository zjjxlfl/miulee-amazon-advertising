<?php

namespace easyAmazonAdv\SponsoredBrands\AdCreatives;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['adCreatives'] = function ($app) {
            return new Client($app);
        };
    }
}
