<?php

namespace easyAmazonAdv\SponsoredProducts\ProductRecommendationService;

use easyAmazonAdv\SponsoredProducts\ProductAdsV3\Client;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['ProductRecommendationService'] = function ($app) {
            return new Client($app);
        };
    }
}
