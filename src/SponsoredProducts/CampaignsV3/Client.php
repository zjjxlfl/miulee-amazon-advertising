<?php

namespace easyAmazonAdv\SponsoredProducts\CampaignsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spCampaign.v3+json','Content-Type' => 'application/vnd.spCampaign.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:07
     * @param $params
     * @return array
     */
    public function createCampaigns($params)
    {
        return $this->httpPost('/sp/campaigns', $params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:08
     * @param $params
     * @return array
     */
    public function updateCampaigns($params)
    {
        return $this->httpPut('/sp/campaigns', $params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:08
     * @param array $params
     * @return array
     */
    public function listCampaigns(array $params = [])
    {
        return $this->httpPost('/sp/campaigns/list', $params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/12 17:22
     * @param array $params
     * @return array
     */
    public function deleteCampaigns(array $params = [])
    {
        return $this->httpPost('/sp/campaigns/delete', $params,[],false,$this->header);
    }
}
