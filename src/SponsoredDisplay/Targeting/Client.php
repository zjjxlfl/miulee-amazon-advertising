<?php

namespace easyAmazonAdv\SponsoredDisplay\Targeting;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2020-02-17 14:50
 */
class Client extends BaseClient
{
    /**
     * listTargetingClauses.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function listTargetingClauses(array $params = [])
    {
        return $this->httpGet('/sd/targets', $params, false);
    }

    /**
     * updateTargetingClauses.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function updateTargetingClauses(array $params)
    {
        return $this->httpPut('/sd/targets', $params, [], false);
    }

    /**
     * createTargetingClauses.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function createTargetingClauses(array $params)
    {
        return $this->httpPost('/sd/targets', $params, [], false);
    }

    /**
     * getTargetingClause.
     *
     * @param string $targetId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function getTargetingClause(string $targetId)
    {
        return $this->httpGet('/sd/targets/'.$targetId, [], false);
    }

    /**
     * deleteTargetingClause.
     *
     * @param string $targetId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2020-02-17 14:48
     */
    public function deleteTargetingClause(string $targetId)
    {
        return $this->httpDelete('/sd/targets/'.$targetId, [], [], false);
    }

    /**
     * listTargetingClausesEx.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function listTargetingClausesEx(array $params = [])
    {
        return $this->httpGet('/sd/targets/extended', $params, false);
    }

    /**
     * getTargetingClauseEx.
     *
     * @param string $targetId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function getTargetingClauseEx(string $targetId)
    {
        return $this->httpGet('/sd/targets/extended/'.$targetId, [], false);
    }
    /**
     * 推荐竞价
     * author zjjxlfl
     * 2023年12月15日
     * @param array $params
     */
    public function bidRecommendations(array $params)
    {
        $header=['Accept' => 'application/vnd.sdtargetingrecommendations.v3.3+json','Content-Type' => 'application/vnd.sdtargetingrecommendations.v3.3+json'];
        return $this->httpPost('/sd/targets/bid/recommendations', $params, [], false,$header);
    }
    /**
     * listNegativeTargetingClausesEx.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function listNegativeTargetingClausesEx(array $params = [])
    {
        return $this->httpGet('/sd/negativeTargets/extended', $params, false);
    }
    
}
