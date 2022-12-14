<?php

namespace easyAmazonAdv\SponsoredProducts\NegativeKeywordsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['negativeKeywordsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
