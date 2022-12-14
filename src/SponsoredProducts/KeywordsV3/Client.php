<?php

namespace easyAmazonAdv\SponsoredProducts\KeywordsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spKeyword.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:39
     * @param array $params
     * @return array
     */
    public function listKeywords(array $params)
    {
        return $this->httpPost("/sp/keywords/list",$params,[],false,$this->header);
    }


    /**
     * Author: yunlong
     * Time: 2022/12/13 15:39
     * @param array $params
     * @return array
     */
    public function createKeywords(array $params)
    {
        return $this->httpPost("/sp/keywords",$params,[],false,$this->header);
    }


    /**
     * Author: yunlong
     * Time: 2022/12/13 15:39
     * @param array $params
     * @return array
     */
    public function updateKeywords(array $params)
    {
        return $this->httpPut("/sp/keywords",$params,[],false,$this->header);
    }


    /**
     * Author: yunlong
     * Time: 2022/12/13 15:39
     * @param array $params
     * @return array
     */
    public function deleteKeywords(array $params)
    {
        return $this->httpPost("/sp/keywords/delete",$params,[],false,$this->header);
    }
}
