<?php

namespace easyAmazonAdv\SponsoredProducts\ProductRecommendationService;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['productRecommendationService'] = function ($app) {
            return new Client($app);
        };
    }
}
