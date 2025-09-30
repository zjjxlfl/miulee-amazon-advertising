<?php

namespace easyAmazonAdv\AdsApi\Campaigns;

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
        return $this->httpGet('/sp/campaigns/'.$campaignId);
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
        return $this->httpGet('/sp/campaigns/extended/'.$campaignId);
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
        return $this->httpPost('/sp/campaigns', $params);
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
        return $this->httpPut('/sp/campaigns', $params);
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
        return $this->httpDelete('/sp/campaigns/'.$campaignId);
    }

    /**
     * listCampaigns
     * author zjjxlfl
     * 2025年9月30日
     * @param array $params
     */
    public function queryCampaigns(array $params = [])
    {
        return $this->httpPost('/adsApi/v1/query/campaigns', $params,[],false);
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
        return $this->httpGet('/sp/campaigns/extended', $params);
    }
}
