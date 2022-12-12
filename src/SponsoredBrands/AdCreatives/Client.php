<?php

namespace easyAmazonAdv\SponsoredBrands\AdCreatives;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.sbAdCreativeResource.v4+json'];

    /**
     * Notes:listAdCreatives
     * Author: yunlong
     * Time: 2022/12/9 17:21
     * @param array $params
     * @return array
     */
    public function listAdCreatives(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/list', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdCreativesVideo
     * Author: yunlong
     * Time: 2022/12/9 17:22
     * @param array $params
     * @return array
     */
    public function createAdCreativesVideo(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/video', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdCreativesStoreSpotlight
     * Author: yunlong
     * Time: 2022/12/9 17:22
     * @param array $params
     * @return array
     */
    public function createAdCreativesStoreSpotlight(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/storeSpotlight', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdCreativesProductCollection
     * Author: yunlong
     * Time: 2022/12/9 17:24
     * @param array $params
     * @return array
     */
    public function createAdCreativesProductCollection(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/productCollection', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdCreativesBrandVideo
     * Author: yunlong
     * Time: 2022/12/9 17:24
     * @param array $params
     * @return array
     */
    public function createAdCreativesBrandVideo(array $params = [])
    {
        return $this->httpPost('/sb/ads/creatives/brandVideo', $params, [],false,$this->header);
    }
}
