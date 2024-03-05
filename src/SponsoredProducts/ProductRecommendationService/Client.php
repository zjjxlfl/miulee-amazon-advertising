<?php

namespace easyAmazonAdv\SponsoredProducts\ProductRecommendationService;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Content-Type' => 'application/vnd.spproductrecommendation.v3+json'];

    /**
     * Time: 2022/12/13 15:39
     * @param array $params
     * @return array
     */
    public function recommendations(array $params)
    {
        return $this->httpPost("/sp/targets/products/recommendations", $params, [], false, $this->header);
    }

}
