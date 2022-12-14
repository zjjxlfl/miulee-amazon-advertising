<?php

namespace easyAmazonAdv\SponsoredProducts\ProductTargetingV3;

use easyAmazonAdv\Kernel\BaseClient;

class Client extends BaseClient
{
    protected $header = ['Accept' => 'application/vnd.spproducttargeting.v3+json'];

    /**
     * Note: Get number of targetable asins based on refinements provided by the user.
     * Author: yunlong
     * Time: 2022/12/13 16:25
     * @param string $targetId
     * @return array
     */
    public function getTargetProductsCount(array $params)
    {
        return $this->httpPost('/sp/targets/products/count',$params,[],false,$this->header);
    }

    /**
     * Note: Returns all targetable categories.
     * Author: yunlong
     * Time: 2022/12/13 16:25
     * @param string $targetId
     * @return array
     */
    public function listTargetCategories(array $params)
    {
        return $this->httpGet('/sp/targets/categories',$params,false,$this->header);
    }

    /**
     * Note: Returns brands related to keyword input for negative targeting.
     * Author: yunlong
     * Time: 2022/12/13 16:25
     * @param string $targetId
     * @return array
     */
    public function listNegativeTargetBrands(array $params)
    {
        return $this->httpPost('/sp/negativeTargets/brands/search',$params,[],false,$this->header);
    }


    /**
     * Note: Returns refinements according to category input.
     * Author: yunlong
     * Time: 2022/12/13 16:25
     * @param string $targetId
     * @return array
     */
    public function getTargetCategoryRefinements(string $categoryId,array $params)
    {
        return $this->httpGet('/sp/targets/category/'.$categoryId.'/refinements',$params,false,$this->header);
    }


    /**
     * Note: Returns a list of category recommendations for the input list of ASINs.
     * Author: yunlong
     * Time: 2022/12/13 16:25
     * @param string $targetId
     * @return array
     */
    public function listTargetCategoryRecommendatons(array $params)
    {
        return $this->httpPost('/sp/targets/categories/recommendations',$params,[],false,$this->header);
    }


    /**
     * Note: Returns brands recommended for negative targeting.
     * Author: yunlong
     * Time: 2022/12/13 16:25
     * @param string $targetId
     * @return array
     */
    public function getNegativeTargetBrandRecommendatons(array $params)
    {
        return $this->httpGet('/sp/negativeTargets/brands/recommendations',$params,false,$this->header);
    }
}
