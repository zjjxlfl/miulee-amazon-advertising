<?php

namespace easyAmazonAdv\BaseService\Portfolios;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 14:56
 */
class Client extends BaseClient
{
    protected $header = ['Content-Type' => 'application/vnd.spPortfolio.v3+json'];

    /**
     * listPortfolios.
     *
     * @param array $data
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-19 23:48
     */
    public function listPortfolios(array $data = [])
    {
        return $this->httpGet('/portfolios', $data);
    }

    /**
     * listPortfoliosEx.
     *
     * @param array $data
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-19 23:48
     */
    public function listPortfoliosEx(array $data = [])
    {
        return $this->httpGet('/portfolios/extended', $data);
    }

    /**
     * getPortfolio.
     *
     * @param string $portfolioId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-19 23:48
     */
    public function getPortfolio(string $portfolioId)
    {
        return $this->httpGet('/portfolios/'.$portfolioId);
    }

    /**
     * getPortfolioEx.
     *
     * @param string $portfolioId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-19 23:48
     */
    public function getPortfolioEx(string $portfolioId)
    {
        return $this->httpGet('/portfolios/extended/'.$portfolioId);
    }

    /**
     * createPortfolios.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-19 23:48
     */
    public function createPortfolios(array $params)
    {
        return $this->httpPost('/portfolios/', $params);
    }

    /**
     * updatePortfolios.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-19 23:48
     */
    public function updatePortfolios(array $params)
    {
        return $this->httpPut('/portfolios/', $params, [], false, $this->header);
    }

    /**
     * 获取广告组合预算使用情况
     * author zjjxlfl
     * 2024年6月12日
     * @param array $params
     */
    public function getBudgetUsage(array $params)
    {
        return $this->httpPost('/portfolios/budget/usage/', $params, [], false);
    }
}
