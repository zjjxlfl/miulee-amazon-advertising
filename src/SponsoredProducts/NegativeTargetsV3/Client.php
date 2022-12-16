<?php

namespace easyAmazonAdv\SponsoredProducts\NegativeTargetsV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spNegativeTargetingClause.v3+json','Content-Type' => 'application/vnd.spNegativeTargetingClause.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function listNegativeTargets(array $params)
    {
        return $this->httpPost("/sp/negativeTargets/list",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function createNegativeTargets(array $params)
    {
        return $this->httpPost("/sp/negativeTargets",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function updateNegativeTargets(array $params)
    {
        return $this->httpPut("/sp/negativeTargets",$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 15:59
     * @param array $params
     * @return array
     */
    public function deleteNegativeTargets(array $params)
    {
        return $this->httpPost("/sp/negativeTargets/delete",$params,[],false,$this->header);
    }
}
