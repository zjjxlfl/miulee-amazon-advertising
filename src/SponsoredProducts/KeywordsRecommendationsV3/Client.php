<?php

namespace easyAmazonAdv\SponsoredProducts\KeywordsRecommendationsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spkeywordsrecommendation.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:39
     * @param array $params
     * @return array
     */
    public function listKeywordRecommendationsV3(array $params)
    {
        return $this->httpPost("/sp/targets/keywords/recommendations",$params,[],false,$this->header);
    }
}
