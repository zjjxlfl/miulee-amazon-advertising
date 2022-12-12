<?php

namespace easyAmazonAdv\SponsoredBrands\GroupsV4;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['groupsV4'] = function ($app) {
            return new Client($app);
        };
    }
}
