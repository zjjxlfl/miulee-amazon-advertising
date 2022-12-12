<?php

namespace easyAmazonAdv\SponsoredBrands\CampaignsV4;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['campaignsV4'] = function ($app) {
            return new Client($app);
        };
    }
}
