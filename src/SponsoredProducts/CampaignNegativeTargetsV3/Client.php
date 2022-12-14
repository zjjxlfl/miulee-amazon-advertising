<?php

namespace easyAmazonAdv\SponsoredProducts\CampaignNegativeTargetsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spCampaignNegativeTargetingClause.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function listCampaignNegativeTargets(array $params)
    {
        return $this->httpPost("/sp/campaignNegativeTargets/list",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function createCampaignNegativeTargets(array $params)
    {
        return $this->httpPost("/sp/campaignNegativeTargets",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function updateCampaignNegativeTargets(array $params)
    {
        return $this->httpPut("/sp/campaignNegativeTargets",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function deleteCampaignNegativeTargets(array $params)
    {
        return $this->httpPost("/sp/campaignNegativeTargets/delete",$params,[],false,$this->header);
    }
}
