<?php

namespace easyAmazonAdv\SponsoredProducts\ProductAdsV3;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:08
 */
class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spProductAd.v3+json','Content-Type' => 'application/vnd.spProductAd.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:37
     * @param array $products
     * @return array
     */
    public function createProductAds(array $products)
    {
        return $this->httpPost('/sp/productAds', $products,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:37
     * @param array $products
     * @return array
     */
    public function updateProductAds(array $products)
    {
        return $this->httpPut('/sp/productAds', $products,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:37
     * @param array $products
     * @return array
     */
    public function listProductAds(array $params = [])
    {
        return $this->httpPost('/sp/productAds/list', $params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:37
     * @param array $products
     * @return array
     */
    public function deleteProductAds(array $params = [])
    {
        return $this->httpPost('/sp/productAds/delete', $params,[],false,$this->header);
    }
}
