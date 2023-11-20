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
        return $this->httpPost("/sb/negativeTargets/list", $params, [], false);
    }

    /**
     * @param string $targetId
     * @return array
     */
    public function getNegativeTargetClause(string $targetId)
    {
        return $this->httpGet('/sb/negativeTargets' . $targetId, [], false);
    }

    /**
     * @param array $params
     * @return array
     */
    public function createNegativeTargets(array $params)
    {
        return $this->httpPost("/sb/negativeTargets", $params, [], false);
    }

    /**
     * @param array $params
     * @return array
     */
    public function updateNegativeTargets(array $params)
    {
        return $this->httpPut("/sb/negativeTargets", $params, [], false);
    }

}
