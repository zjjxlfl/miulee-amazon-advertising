<?php

namespace easyAmazonAdv\SponsoredDisplay\Campaigns;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:50
 */
class Client extends BaseClient
{
    /**
     * getCampaign.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function getCampaign(int $campaignId)
    {
        return $this->httpGet('/sd/campaigns/'.$campaignId, [], false);
    }

    /**
     * getCampaignEx.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function getCampaignEx(int $campaignId)
    {
        return $this->httpGet('/sd/campaigns/extended/'.$campaignId, [], false);
    }

    /**
     * createCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function createCampaigns($params)
    {
        return $this->httpPost('/sd/campaigns', $params, [], false);
    }

    /**
     * updateCampaigns.
     *
     * @param $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function updateCampaigns($params)
    {
        return $this->httpPut('/sd/campaigns', $params, [], false);
    }

    /**
     * archiveCampaign.
     *
     * @param int $campaignId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function archiveCampaign(int $campaignId)
    {
        return $this->httpDelete('/sd/campaigns/'.$campaignId, [], [], false);
    }

    /**
     * listCampaigns.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function listCampaigns(array $params = [])
    {
        return $this->httpGet('/sd/campaigns', $params, false);
    }

    /**
     * listCampaignsEx.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:43
     */
    public function listCampaignsEx(array $params = [])
    {
        return $this->httpGet('/sd/campaigns/extended', $params, false);
    }
    public function getBudgetUsage(array $params)
    {
        return $this->httpPost('/sd/campaigns/budget/usage', $params, [], false);
    }
}
