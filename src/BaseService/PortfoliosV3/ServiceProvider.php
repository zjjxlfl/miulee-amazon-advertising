<?php

namespace easyAmazonAdv\BaseService\PortfoliosV3;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 14:59
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['portfoliosV3'] = function ($app) {
            return new Client($app);
        };
    }
}
