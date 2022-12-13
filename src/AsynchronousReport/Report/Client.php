<?php

namespace easyAmazonAdv\AsynchronousReport\Report;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.createasyncreportrequest.v3+json'];
    /**
     * Author: yunlong
     * Time: 2022/12/13 9:17
     * @param string $recordType
     * @param array $params
     * @return array
     */
    public function createReport(array $params)
    {
        return $this->httpPost("/reporting/reports", $params,[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 9:21
     * @param string $reportId
     * @return array
     */
    public function getReport(string $reportId)
    {
        return $this->httpGet("/reporting/reports/{$reportId}",[],false,$this->header);
    }

    /**
     * Author: yunlong
     * Time: 2022/12/13 9:23
     * @param string $reportId
     * @param $params
     * @return array
     */
    public function deleteReport(string $reportId)
    {
        return $this->httpDelete("/reporting/reports/{$reportId}", [],[],false,$this->header);
    }
}
