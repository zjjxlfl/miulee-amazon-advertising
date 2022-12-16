<?php

namespace easyAmazonAdv\SponsoredProducts\GroupsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spAdGroup.v3+json','Content-Type' => 'application/vnd.spAdGroup.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:29
     * @param array $params
     * @return array
     */
    public function createAdGroups(array $params)
    {
        return $this->httpPost('/sp/adGroups', $params,[],false,$this->header);
    }


    /**
     * Author: yunlong
     * Time: 2022/12/12 17:30
     * @param array $params
     * @return array
     */
    public function updateAdGroups(array $params)
    {
        return $this->httpPut('/sp/adGroups', $params,[],false,$this->header);
    }


    /**
     * Author: yunlong
     * Time: 2022/12/12 17:32
     * @param array $params
     * @return array
     */
    public function listAdGroups(array $params = [])
    {
        return $this->httpPost('/sp/adGroups/list', $params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:32
     * @param array $params
     * @return array
     */
    public function deleteAdGroups(array $params = [])
    {
        return $this->httpPost('/sp/adGroups/delete', $params,[],false,$this->header);
    }
}
