<?php

namespace easyAmazonAdv\SponsoredProducts\KeywordsRecommendationsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['KeywordsRecommendationsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
