<?php

namespace easyAmazonAdv\SponsoredProducts\BudgetRules;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['budget_rules'] = function ($app) {
            return new Client($app);
        };
    }
}