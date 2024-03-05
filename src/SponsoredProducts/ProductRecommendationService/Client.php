<?php

namespace easyAmazonAdv\SponsoredProducts\ProductRecommendationService;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:08
 */
class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spproductrecommendation.v3+json', 'Content-Type' => 'application/vnd.spproductrecommendation.v3+json'];

    /**
     * @param array $params
     * @return array
     */
    public function recommendations(array $params = [])
    {
        return $this->httpPost('/sp/targets/products/recommendations', $params, [], false, $this->header);
    }

}
