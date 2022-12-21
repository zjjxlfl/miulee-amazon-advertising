<?php

namespace easyAmazonAdv\History\History;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['history'] = function ($app) {
            return new Client($app);
        };
    }
}
