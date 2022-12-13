<?php

namespace easyAmazonAdv\SponsoredProducts\CampaignsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['campaignsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
