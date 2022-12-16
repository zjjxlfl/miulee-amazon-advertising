<?php

namespace easyAmazonAdv\SponsoredProducts\CampaignNegativeKeywordsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spCampaignNegativeKeyword.v3+json','Content-Type' => 'application/vnd.spCampaignNegativeKeyword.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function listCampaignNegativeKeywords(array $params)
    {
        return $this->httpPost("/sp/campaignNegativeKeywords/list",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function createCampaignNegativeKeywords(array $params)
    {
        return $this->httpPost("/sp/campaignNegativeKeywords",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function updateCampaignNegativeKeywords(array $params)
    {
        return $this->httpPut("/sp/campaignNegativeKeywords",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function deleteCampaignNegativeKeywords(array $params)
    {
        return $this->httpPost("/sp/campaignNegativeKeywords/delete",$params,[],false,$this->header);
    }
}
