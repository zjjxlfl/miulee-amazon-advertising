<?php

namespace easyAmazonAdv\Exports\AdGroups;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header=['Accept' => 'application/vnd.adgroupssexport.v1+json','Content-Type' => 'application/vnd.adgroupssexport.v1+json'];
    public function campaignsExport(array $params = [])
    {
        return $this->httpPost('/adGroups/export', $params, [],false,$this->header);
    }
    public function getExport(string $exportId)
    {
        return $this->httpGet("/exports/{$exportId}",[],false,$this->header);
    }
}
