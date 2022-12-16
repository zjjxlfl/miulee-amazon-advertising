<?php

namespace easyAmazonAdv\SponsoredProducts\ProductTargetingV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spTargetingClause.v3+json','Content-Type' => 'application/vnd.spTargetingClause.v3+json'];

    /**
     * Author: yunlong
     * Time: 2022/12/14 13:46
     * @param array $params
     * @return array
     */
    public function listTargets(array $params)
    {
        return $this->httpPost('/sp/targets/list',$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/14 13:46
     * @param array $params
     * @return array
     */
    public function createTargets(array $params)
    {
        return $this->httpPost('/sp/targets',$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/14 13:46
     * @param array $params
     * @return array
     */
    public function updateTargets(array $params)
    {
        return $this->httpPut('/sp/targets',$params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/14 13:46
     * @param array $params
     * @return array
     */
    public function deleteTargets(array $params)
    {
        return $this->httpPost('/sp/targets/delete',$params,[],false,$this->header);
    }
}
