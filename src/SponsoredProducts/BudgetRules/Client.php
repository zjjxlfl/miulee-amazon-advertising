<?php

namespace easyAmazonAdv\SponsoredProducts\BudgetRules;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 09:43
 */
class Client extends BaseClient
{
    /**
     * getBudgetRules.
     *
     * @param int    $pageSize   Sets a limit on the number of results returned. Maximum limit of pageSize is 30.
     * @param string $nextToken  To retrieve the next page of results, call the same operation and specify this token in the request. If the nextToken field is empty, there are no further results.
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 19:50
     */
    public function getBudgetRules(int $pageSize = 30, string $nextToken = '')
    {
        $params['pageSize'] = $pageSize;
        if ($nextToken) {
            $params['nextToken'] = $nextToken;
        }
        return $this->httpGet('/sp/budgetRules', $params, false);
    }
}