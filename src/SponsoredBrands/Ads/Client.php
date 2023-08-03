<?php

namespace easyAmazonAdv\SponsoredBrands\Ads;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.sbadresource.v4+json','Content-Type' => 'application/vnd.sbadresource.v4+json'];

    /**
     * Notes:listAds
     * Author: yunlong
     * Time: 2022/12/9 17:21
     * @param array $params
     * @return array
     */
    public function listAds(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/list', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdBrandVideos
     * Author: yunlong
     * Time: 2022/12/9 17:22
     * @param array $params
     * @return array
     */
    public function createAdsBrandVideo(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/brandVideo', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdsVideo
     * Author: yunlong
     * Time: 2022/12/9 17:22
     * @param array $params
     * @return array
     */
    public function createAdsVideo(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/video', $params, [],false,$this->header);
    }


    /**
     * Notes:updateAds
     * Author: yunlong
     * Time: 2022/12/9 17:23
     * @param array $params
     * @return array
     */
    public function updateAds(array $params = [])
    {
        return $this->httpPut('/sb/v4/ads', $params, [],false,$this->header);
    }


    /**
     * Notes:deleteGroups
     * Author: yunlong
     * Time: 2022/12/9 17:24
     * @param array $params
     * @return array
     */
    public function deleteAds(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/delete', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdsProductCollection
     * Author: yunlong
     * Time: 2022/12/9 17:24
     * @param array $params
     * @return array
     */
    public function createAdsProductCollection(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/productCollection', $params, [],false,$this->header);
    }


    /**
     * Notes:createAdsStoreSpotlight
     * Author: yunlong
     * Time: 2022/12/9 17:24
     * @param array $params
     * @return array
     */
    public function createAdsStoreSpotlight(array $params = [])
    {
        return $this->httpPost('/sb/v4/ads/storeSpotlight', $params, [],false,$this->header);
    }
}
