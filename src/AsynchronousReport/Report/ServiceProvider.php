<?php

namespace easyAmazonAdv\AsynchronousReport\Report;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['report'] = function ($app) {
            return new Client($app);
        };
    }
}
