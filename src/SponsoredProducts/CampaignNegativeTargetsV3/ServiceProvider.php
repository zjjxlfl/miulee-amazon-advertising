<?php

namespace easyAmazonAdv\SponsoredProducts\CampaignNegativeTargetsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['campaignNegativeTargetsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
