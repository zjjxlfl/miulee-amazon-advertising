<?php

namespace easyAmazonAdv\Exports\Campaigns;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header=['Accept' => 'application/vnd.campaignsexport.v1+json','Content-Type' => 'application/vnd.campaignsexport.v1+json'];
    public function campaignsExport(array $params = [])
    {
        return $this->httpPost('/campaigns/export', $params, [],false,$this->header);
    }
    public function getExport(string $exportId)
    {
        return $this->httpGet("/exports/{$exportId}",[],false,$this->header);
    }
}
