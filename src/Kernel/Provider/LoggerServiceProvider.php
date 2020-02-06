<?php

namespace easyAmazonAdv\Kernel\Provider;

use Monolog\Formatter\HtmlFormatter;
use Monolog\Formatter\JsonFormatter;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class LoggerServiceProvider
 * @package easyAmazonAdv\Kernel\Provider
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2020-02-05 16:07
 */
class LoggerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        isset($pimple['logger']) || $pimple['logger'] = function ($app) {
            $config    = $this->formatLogConfig($app);
            $logger    = new Logger($config['channel']);
            $stream    = new StreamHandler($config['path'], Logger::DEBUG);
            $formatter = new LineFormatter(null, null, true, true);
            $stream->setFormatter($formatter);
            $logger->pushHandler($stream);
            $logger->pushHandler(new FirePHPHandler());
            return $logger;
        };
    }

    public function formatLogConfig($app)
    {
        $config = $app['config']->toArray();
        return [
            'channel' => 'EasyAmazonAdv',
            'path'    => isset($config['log']['path']) ?: \sys_get_temp_dir() . '/logs/amazon/amazon_adv.log',
            'level'   => isset($config['log']['level']) ?: 'debug',
        ];
    }
}