<?php

namespace easyAmazonAdv\SponsoredProducts\NegativeKeywordsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spNegativeKeyword.v3+json','Content-Type' => 'application/vnd.spNegativeKeyword.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function listNegativeKeywords(array $params)
    {
        return $this->httpPost("/sp/negativeKeywords/list",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function createNegativeKeywords(array $params)
    {
        return $this->httpPost("/sp/negativeKeywords",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function updateNegativeKeywords(array $params)
    {
        return $this->httpPut("/sp/negativeKeywords",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function deleteNegativeKeywords(array $params)
    {
        return $this->httpPost("/sp/negativeKeywords/delete",$params,[],false,$this->header);
    }
}
