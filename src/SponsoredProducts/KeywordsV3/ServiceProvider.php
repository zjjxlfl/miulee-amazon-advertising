<?php

namespace easyAmazonAdv\SponsoredProducts\KeywordsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['keywordsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
