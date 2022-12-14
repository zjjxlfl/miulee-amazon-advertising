<?php

namespace easyAmazonAdv\SponsoredProducts\ProductTargetingRecommendationsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['productTargetingRecommendationsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
