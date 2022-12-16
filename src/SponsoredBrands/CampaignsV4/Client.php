<?php

namespace easyAmazonAdv\SponsoredBrands\CampaignsV4;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.sbcampaignresource.v4+json','Content-Type' => 'application/vnd.sbcampaignresource.v4+json'];
    /**
     * Notes: 获取活动列表V4版本
     * Author: yunlong
     * Time: 2022/12/9 15:29
     * @param array $params
     * @return array
     */
    public function listCampaigns(array $params = [])
    {
        return $this->httpPost('/sb/beta/campaigns/list', $params,[], false,$this->header);
    }

    /**
     * Notes: 创建
     * Author: yunlong
     * Time: 2022/12/9 15:38
     * @param $params
     * @return array
     */
    public function createCampaigns($params)
    {
        return $this->httpPost('/sb/beta/campaigns', $params, [], false,$this->header);
    }
}
