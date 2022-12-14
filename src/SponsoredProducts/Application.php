<?php

namespace easyAmazonAdv\SponsoredProducts;

use easyAmazonAdv\Kernel\Provider\ClientServiceProvider;
use easyAmazonAdv\Kernel\Provider\LoggerServiceProvider;
use easyAmazonAdv\Kernel\Support\Collection;
use Pimple\Container;

/**
 * Class Application.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-13 23:51
 */
class Application extends Container
{
    /**
     * @var array
     */
    protected $providers = [
        ClientServiceProvider::class,
        LoggerServiceProvider::class,
        ProductTargeting\ServiceProvider::class,
        ProductTargetingV3\ServiceProvider::class,
        ProductAds\ServiceProvider::class,
        ProductAdsV3\ServiceProvider::class,
        Keywords\ServiceProvider::class,
        KeywordsV3\ServiceProvider::class,
        NegativeKeywordsV3\ServiceProvider::class,
        NegativeTargetsV3\ServiceProvider::class,
        KeywordsRecommendationsV3\ServiceProvider::class,
        Groups\ServiceProvider::class,
        GroupsV3\ServiceProvider::class,
        Campaigns\ServiceProvider::class,
        CampaignsV3\ServiceProvider::class,
        Bidding\ServiceProvider::class,
        BudgetRules\ServiceProvider::class,
        Report\ServiceProvider::class,
    ];

    /**
     * Application constructor.
     *
     * @param array $config
     * @param array $values
     */
    public function __construct($config = [], array $values = [])
    {
        parent::__construct($values);
        $this['config'] = function () use ($config) {
            return new Collection($config);
        };
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * __get.
     *
     * @param $name
     *
     * @return mixed
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-13 23:52
     */
    public function __get($name)
    {
        return $this[$name];
    }
}
