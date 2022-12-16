<?php

namespace easyAmazonAdv\SponsoredBrands\GroupsV4;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.sbadgroupresource.v4+json','Content-Type' => 'application/vnd.sbadgroupresource.v4+json'];

    /**
     * Notes:listAdGroups
     * Author: yunlong
     * Time: 2022/12/9 17:21
     * @param array $params
     * @return array
     */
    public function listAdGroups(array $params = [])
    {
        return $this->httpPost('/sb/beta/adGroups/list', $params, [],false,$this->header);
    }


    /**
     * Notes:createGroups
     * Author: yunlong
     * Time: 2022/12/9 17:22
     * @param array $params
     * @return array
     */
    public function createAdGroups(array $params = [])
    {
        return $this->httpPost('/sb/beta/adGroups', $params, [],false,$this->header);
    }


    /**
     * Notes:updateGroups
     * Author: yunlong
     * Time: 2022/12/9 17:23
     * @param array $params
     * @return array
     */
    public function updateAdGroups(array $params = [])
    {
        return $this->httpPut('/sb/beta/adGroups', $params, [],false,$this->header);
    }


    /**
     * Notes:deleteGroups
     * Author: yunlong
     * Time: 2022/12/9 17:24
     * @param array $params
     * @return array
     */
    public function deleteAdGroups(array $params = [])
    {
        return $this->httpPost('/sb/beta/adGroups/delete', $params, [],false,$this->header);
    }
}
