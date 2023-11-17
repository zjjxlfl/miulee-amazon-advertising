<?php

namespace easyAmazonAdv\SponsoredBrands\NegativeKeywordsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['NegativeKeywordsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
