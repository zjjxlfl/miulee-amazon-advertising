<?php

namespace easyAmazonAdv\SponsoredBrands\Ads;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['ads'] = function ($app) {
            return new Client($app);
        };
    }
}
