<?php

namespace easyAmazonAdv\SponsoredBrands\NegativeTargetsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * @param array $params
     * @return array
     */
    public function listNegativeTargets(array $params)
    {
        return $this->httpPost("/sb/targets/list", $params, [], false);
    }

    /**
     * @param string $targetId
     * @return array
     */
    public function getNegativeTargetClause(string $targetId)
    {
        return $this->httpGet('/sb/targets/' . $targetId, [], false);
    }

    /**
     * @param array $params
     * @return array
     */
    public function createNegativeTargets(array $params)
    {
        return $this->httpPost("/sb/targets", $params, [], false);
    }

    /**
     * @param array $params
     * @return array
     */
    public function updateNegativeTargets(array $params)
    {
        return $this->httpPut("/sb/targets", $params, [], false);
    }

}
