<?php

namespace easyAmazonAdv\SponsoredBrands\NegativeKeywordsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * @param array $params
     * @return array
     */
    public function listNegativeKeywords(array $params)
    {
        return $this->httpGet("/sb/negativeKeywords", $params, [], false, $this->header);
    }

    /**
     * @param array $params
     * @return array
     */
    public function getNegativeKeywordClause(string $params)
    {
        return $this->httpGet("/sb/keywords/", $params, [], false, $this->header);
    }

    /**
     * @param array $params
     * @return array
     */
    public function createNegativeKeywords(array $params)
    {
        return $this->httpPost("/sb/negativeKeywords", $params, [], false, $this->header);
    }

    /**
     * @param array $params
     * @return array
     */
    public function updateNegativeKeywords(array $params)
    {
        return $this->httpPut("/sb/negativeKeywords", $params, [], false, $this->header);
    }

    /**
     * @param array $params
     * @return array
     */
    public function deleteNegativeKeywords(array $params)
    {
        return $this->httpPost("/sb/keywords/", $params, [], false, $this->header);
    }
}
