<?php

namespace easyAmazonAdv\MarketingStream\Subscription;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header=['Accept' => 'application/vnd.amazonmarketingstreamsubscriptions.v1+json','Content-Type' => 'application/vnd.amazonmarketingstreamsubscriptions.v1+json'];
    public function createStreamSubscription(array $params = [])
    {
        return $this->httpPost('/streams/subscriptions', $params, [],false,$this->header);
    }
    public function getStreamSubscription(string $subscriptionId)
    {
        return $this->httpGet('/streams/subscriptions/'.$subscriptionId, [],false,$this->header);
    }
    
}
