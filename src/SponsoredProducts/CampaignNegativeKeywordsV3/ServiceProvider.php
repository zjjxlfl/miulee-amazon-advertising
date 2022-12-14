<?php

namespace easyAmazonAdv\SponsoredProducts\CampaignNegativeKeywordsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['campaignNegativeKeywordsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
