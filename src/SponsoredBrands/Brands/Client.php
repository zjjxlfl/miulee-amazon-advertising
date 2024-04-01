<?php

namespace easyAmazonAdv\SponsoredBrands\Brands;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * @param array $params
     * @return array
     */
    public function list(array $params)
    {
        return $this->httpGet("/brands", $params, [], false);
    }

}
