<?php

namespace easyAmazonAdv\SponsoredBrands\NegativeKeywordsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spNegativeKeyword.v3+json', 'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json'];

    /**
     * @param array $params
     * @return array
     */
    public function listNegativeKeywords(array $params)
    {
        return $this->httpPost("/sb/negativeKeywords", $params, [], false, $this->header);
    }

    /**
     * @param array $params
     * @return array
     */
    public function getNegativeKeywordClause(string $params)
    {
        return $this->httpPost("/sb/keywords/", $params, [], false, $this->header);
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
