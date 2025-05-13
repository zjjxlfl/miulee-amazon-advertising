<?php

namespace easyAmazonAdv\MarketingStream\Subscription;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['subscription'] = function ($app) {
            return new Client($app);
        };
    }
}
