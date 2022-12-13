<?php

namespace easyAmazonAdv\SponsoredProducts\GroupsV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['groupsV3'] = function ($app) {
            return new Client($app);
        };
    }
}
