<?php

namespace easyAmazonAdv\History\History;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * Notes:listAdCreatives
     * Author: yunlong
     * Time: 2022/12/9 17:21
     * @param array $params
     * @return array
     */
    public function listHistory(array $params = [])
    {
        return $this->httpPost('/history', $params, [],false);
    }
}
