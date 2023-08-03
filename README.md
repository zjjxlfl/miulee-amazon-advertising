### Synopsis
## 概述
easy-amazon-advertising  是一个开源的非官方的[亚马逊广告](https://advertising.amazon.com/API/docs/en-us/)业务sdk。

## 环境需求
easy-amazon-advertising 的安装非常简单，因为它是一个标准的 [Composer](https://getcomposer.org/) 包，这意味着任何满足下列安装条件的 PHP 项目支持 Composer 都可以使用它。

```
php: >=7.2.0
guzzlehttp/guzzle: 6.4.*
pimple/pimple: ~3.0
```

## 安装
使用composer安装
```
composer require zjjxlfl/miulee-amazon-advertising
```

## 说明
亚马逊广告业务目前的划分为三种：
- Sponsored Display 推广展示广告
- Sponsored Products 商品推广广告
- Sponsored Brands 	品牌推广广告

亚马逊广告的api文档也大体是如此，针对此种情况本sdk也将模块做了类似的划分。

下面是sdk广告业务模块的划分：
- SponsoredProducts
- SponsoredDisplay
- SponsoredBrands
- BaseService

特殊的 BaseService 模块包含了亚马逊广告api中未做划分的部分，包括AccessToken、Portfolios、Profiles等。

## BaseService

### 入门
```
use easyAmazonAdv\Factory;

$config = [
    'clientId'      => 'amzn1.application-oa2-client.xxx',
    'clientSecret'  => '3b758af8d13ee02355764e4e864fxxxx',
    'refreshToken'   => 'Atzr|IwEBIL5GyUh_H2fdRJnFOk7mmpluKnm7WWUW0kf0tBxAXFMG5VHyiZuIhrspq6hZRHzPM03RMX7v64KrhXaO9xCtylMUQPcN0LolQhH8PNff76Ve5pS6PO9jtNG9kW1K9YtV1WcJDN3KnGpHjk0dUBtbbrn5uh8EGDDVUR_gpqaHXqqdvZ7vuUXTNzstH-tybiAzspzIPxPf7Ans-uyqPNyNTIIM61vA66fvPkH3-c33iLCzrgRtg_jhzWrZuH4K6INBfR8CjKHcK5oNun4DRTiOnCinvUdbHQPwAeI9m581FzUk2Hp4g5KaXO60A6-4me5EMuGSagWfUvTs1MkB1DgPAs_Do3v0TKKN1L6Vab4YgDu6k-bb5pgor_H_LQ24kbfc2Jdyq9BJkSVAAIP5Hh4y3i1qAh18g94Qq_yLWQOxu8ySawTUSDWOkM3_AH5qFS_Yaegfpc96nZE6_eDnycnnheFnXj14-ghaNsROG4LO2RE4n4xnpj9vx9o5aOFVGhf148Cz_VZjiZCg2t_V0Mru7uYRkwz1OUOxxxxxxxxxxx',
    'region'       => 'NA',
];

$app    = Factory::BaseService($config);
```
$app 在所有相关BaseService的文档都是指 Factory::BaseService 得到的实例，就不在每个页面单独写了。

### RefreshToken
您可以使用RefreshToken方法在访问令牌到期时刷新访问令牌。新的访问令牌将在请求的响应中。
```php
use easyAmazonAdv\Factory;

$config = [
    'clientId'      => 'amzn1.application-oa2-client.xxx',
    'clientSecret'  => '3b758af8d13ee02355764e4e864fxxxx',
    'refreshToken'   => 'Atzr|IwEBIL5GyUh_H2fdRJnFOk7mmpluKnm7WWUW0kf0tBxAXFMG5VHyiZuIhrspq6hZRHzPM03RMX7v64KrhXaO9xCtylMUQPcN0LolQhH8PNff76Ve5pS6PO9jtNG9kW1K9YtV1WcJDN3KnGpHjk0dUBtbbrn5uh8EGDDVUR_gpqaHXqqdvZ7vuUXTNzstH-tybiAzspzIPxPf7Ans-uyqPNyNTIIM61vA66fvPkH3-c33iLCzrgRtg_jhzWrZuH4K6INBfR8CjKHcK5oNun4DRTiOnCinvUdbHQPwAeI9m581FzUk2Hp4g5KaXO60A6-4me5EMuGSagWfUvTs1MkB1DgPAs_Do3v0TKKN1L6Vab4YgDu6k-bb5pgor_H_LQ24kbfc2Jdyq9BJkSVAAIP5Hh4y3i1qAh18g94Qq_yLWQOxu8ySawTUSDWOkM3_AH5qFS_Yaegfpc96nZE6_eDnycnnheFnXj14-ghaNsROG4LO2RE4n4xnpj9vx9o5aOFVGhf148Cz_VZjiZCg2t_V0Mru7uYRkwz1OUOxxxxxxxxxxx',
    'region'       => 'NA',
];

$app    = Factory::BaseService($config);
$result = $app->access_token->RefreshToken();
```

### Profiles
Marketplaces 市场通过位置为各个商户分配了特定的配置属性信息。包含countryCode, currencyCode, timezone等。profileID在调用api接口时在header（Amazon-Advertising-API-Scope）中传入。

#### listProfiles
```php
$app->profiles->listProfiles();

[[
  "profileId":1234567890,
  "countryCode":"US",
  "currencyCode":"USD",
  "dailyBudget":10.00,
  "timezone":"America/Los_Angeles",
  "accountInfo":{
  "marketplaceStringId":"ABC123",
  "sellerStringId":"DEF456"
]]
```

#### 设置profileId
```
$app->client->profileId = 1234567890;
```

### Portfolios 广告组合
- listPortfolios 广告组合列表
```
$app->portfolios->listPortfolios(['portfolioId'=>12,'portfolioState'=>'enable']);

[
    [
        "portfolioId": 1234567890,
        "name": "My Portfolio One",
        "budget": [
            "amount": 100.0,
            "currencyCode": "USD",
            "policy": "dateRange"
            "startDate": "20181001",
            "endDate": "20181229"
        ],
        "inBudget": true,
        "state": "enabled",
    ],
    [
        "portfolioId": 0123456789,
        "name": "My Portfolio Two",
        "budget": [
            "amount": 50.0,
            "currencyCode": "USD",
            "policy": "dateRange",
            "startDate": "20181001",
            "endDate": "20181229"
        ],
        "inBudget": true,
        "state": "enabled",
    ]
]

```
- listPortfoliosEx 广告组合列表扩展字段
```
$app->portfolios->listPortfoliosEx(['portfolioId'=>12,'portfolioState'=>'enable']);


[
    [
        "portfolioId": 1234567890,
        "name": "My Portfolio One",
        "budget": [
            "amount": 100.0,
            "currencyCode": "USD",
            "policy": "dateRange"
            "startDate": "20181001",
            "endDate": "20181229"
        ],
        "inBudget": true,
        "state": "enabled",
        "creationDate": 1526510030,
        "lastUpdatedDate": 1526510030,
        "servingStatus": "PENDING_START_DATE"
    ],
    [
        "portfolioId": 0123456789,
        "name": "My Portfolio Two",
        "budget": [
            "amount": 50.0,
            "currencyCode": "USD",
            "policy": "dateRange",
            "startDate": "20181001",
            "endDate": "20181229"
        ],
        "inBudget": true,
        "state": "enabled",
        "creationDate": 1526510030,
        "lastUpdatedDate": 1526510030,
        "servingStatus": "PENDING_START_DATE"
    ]
]
```
- getPortfolio 广告组合详情
```
$app->portfolios->getPortfolio(1234567890);

{
    "portfolioId": 1234567890,
    "name": "My Portfolio One",
    "budget": [
        "amount": 100.0,
        "currencyCode": "USD",
        "policy": "dateRange"
        "startDate": "20181231"
        "endDate": "null"
    ],
    "inBudget": true,
    "state": "enabled"
]
```
- getPortfolioEx 广告组合扩展字段
```
$app->portfolios->getPortfolioEx(1234567890);

[
    "portfolioId": 1234567890,
    "name": "My Portfolio One",
    "budget": [
        "amount": 100.0,
        "policy": "dateRange"
        "startDate": "20190131"
        "endDate": "20190331"
    ],
    "inBudget": true,
    "state": "enabled",
    "creationDate": 1526510030,
    "lastUpdatedDate": 1526510030,
    "servingStatus": "PENDING_START_DATE"
]
```
- createPortfolios 创建广告组合（批量）
```
$params = [
    [
        'name' =>  'My Portfolios name',
    ],
    [
        'name' =>  'My Portfolios two',
        'budget'=>[
            'amount'    =>  1.0,
            'policy'    =>  'dateRange',
            'startDate' =>  '20191220',
            'endDate' =>  '20191221',
        ],
        'state'=>'enable'
    ],
    [
        'name' =>  'My Portfolios three',
        'budget'=>[
            'amount'    =>  1.0,
            'policy'    =>  'monthlyRecurring',
            'endDate' =>  '20191221',
        ],
        'state'=>'enable'
    ],
];
$result = $app->portfolios->createPortfolios($params);

[
    [
        "code": "SUCCESS",
        "portfolioId": 1234567890
    ],
    [
        "code": "SUCCESS",
        "portfolioId": 0123456789
    ],
    [
        "code": "SUCCESS",
        "portfolioId": 1234567891
    ]
]
```
- updatePortfolios 更新广告组合（批量）
```
$params = [
    [
        'portfolioId'=>1234567890,
        'name' =>  'My Portfolios name',
    ],
    [
        'portfolioId'=>0123456789,
        'name' =>  'My Portfolios two',
        'budget'=>[
            'amount'    =>  1.0,
            'policy'    =>  'dateRange',
            'startDate' =>  '20191220',
            'endDate' =>  '20191221',
        ],
        'state'=>'enable'
    ],
    [
        'portfolioId'=>1234567891,
        'name' =>  'My Portfolios three',
        'budget'=>[
            'amount'    =>  1.0,
            'policy'    =>  'monthlyRecurring',
            'endDate' =>  '20191221',
        ],
        'state'=>'enable'
    ],
];
$result = $app->portfolios->updatePortfolios($params);

[
    [
        "code": "SUCCESS",
        "portfolioId": 1234567890
    ],
    [
        "code": "SUCCESS",
        "portfolioId": 0123456789
    ],
    [
        "code": "SUCCESS",
        "portfolioId": 1234567891
    ]
]
```

## SponsoredDisplay

### 入门
```
use easyAmazonAdv\Factory;

$config = [
    'clientId'      => 'amzn1.application-oa2-client.xxx',
    'clientSecret'  => '3b758af8d13ee02355764e4e864fxxxx',
    'refreshToken'   => 'Atzr|IwEBIL5GyUh_H2fdRJnFOk7mmpluKnm7WWUW0kf0tBxAXFMG5VHyiZuIhrspq6hZRHzPM03RMX7v64KrhXaO9xCtylMUQPcN0LolQhH8PNff76Ve5pS6PO9jtNG9kW1K9YtV1WcJDN3KnGpHjk0dUBtbbrn5uh8EGDDVUR_gpqaHXqqdvZ7vuUXTNzstH-tybiAzspzIPxPf7Ans-uyqPNyNTIIM61vA66fvPkH3-c33iLCzrgRtg_jhzWrZuH4K6INBfR8CjKHcK5oNun4DRTiOnCinvUdbHQPwAeI9m581FzUk2Hp4g5KaXO60A6-4me5EMuGSagWfUvTs1MkB1DgPAs_Do3v0TKKN1L6Vab4YgDu6k-bb5pgor_H_LQ24kbfc2Jdyq9BJkSVAAIP5Hh4y3i1qAh18g94Qq_yLWQOxu8ySawTUSDWOkM3_AH5qFS_Yaegfpc96nZE6_eDnycnnheFnXj14-ghaNsROG4LO2RE4n4xnpj9vx9o5aOFVGhf148Cz_VZjiZCg2t_V0Mru7uYRkwz1OUOxxxxxxxxxxx',
    'region'       => 'NA',
];

$app    = Factory::SponsoredDisplay($config);
```

### 设置profileId
```
$app->client->profileId = 1234567890;
```

### Campaigns  广告活动

- getCampaign 广告活动详情
```
$result = $app->campaigns->listCampaigns(1234567890);

[
  "campaignId": 1234567890,
  "name": "CampaignOne",
  "tactic": "remarketing",
  "budgetType": "daily",
  "budget": "3.00",
  "startDate": "20190101",
  "endDate": null,
  "state": "enabled"
]
```
- getCampaignEx 广告活动详情（支持扩展字段展示）
```
$result = $app->campaigns->listCampaigns(1234567890);

[
  "campaignId": 1234567890,
  "name": "CampaignOne",
  "tactic": "remarketing",
  "budgetType": "daily",
  "budget": 0,
  "startDate": "20190101",
  "endDate": "20190102",
  "state": "enabled",
  "servingStatus": "ADVERTISER_STATUS_ENABLED",
  "creationDate": 0,
  "lastUpdatedDate": 0
]

```
- createCampaigns 创建广告活动

```

$params = [
    [
        "name" => "My Campaign One",
        "tactic" => "remarketing",
        "budgetType": "daily",
        "budget": 3.00,
        "startDate": "20190101",
        "endDate": null,
        "state": "enabled"
    ]
];

$result = $app->campaigns->createCampaigns(params);

[
  [
    "code": "SUCCESS",
    "campaignId": 173284463890123
  ]
]

```
- updateCampaigns 
```

$params = [
    [
        "campaignId" => 173284463890123,
        "name" => "Update Campaign One",
        "state" => "enabled",
        "budget" => 10.99
    ]
];


$result = $app->campaigns->updateCampaigns(params);

[
  [
    "code": "SUCCESS",
    "campaignId": 173284463890123
  ]
]

```
- archiveCampaign 归档广告活动
```
$result = $app->campaigns->archiveCampaign(173284463890123);

[
  "code": "SUCCESS",
  "campaignId": 1234567890
]
```

- listCampaigns
```
$result = = $app->campaigns->listCampaigns(["stateFilter" => "enabled"]);

[
  [
    "campaignId": 1234567890,
    "name": "Campaign one",
    "tactic": "remarketing",
    "budgetType": "daily",
    "budget": "3.00",
    "startDate": "20190101",
    "endDate": null,
    "state": "enabled"
  ]
]

```

- listCampaignsEx
```
$result = = $app->campaigns->listCampaignsEx(["stateFilter" => "enabled"]);

[
  [
    "campaignId": 1234567890,
    "name": "Campaign one",
    "tactic": "remarketing",
    "budgetType": "daily",
    "budget": 0,
    "startDate": "20190101",
    "endDate": "20190102",
    "state": "enabled",
    "servingStatus": "ADVERTISER_STATUS_ENABLED",
    "creationDate": 0,
    "lastUpdatedDate": 0
  ]
]
```


#### report
- requestReport
- getReport
- downloadReportData


### SponsoredDisplay 赞助展示业务
#### campaigns
- getCampaign
- getCampaignEx
- createCampaigns
- updateCampaigns
- archiveCampaign
- listCampaigns
- listCampaignsEx

#### groups
- getAdGroup
- getAdGroupEx
- createAdGroups
- updateAdGroups
- archiveAdGroup
- listAdGroups
- listAdGroupsEx

### product_ads
- getProductAd
- getProductAdEx
- createProductAds
- updateProductAds
- archiveProductAd
- listProductAds
- listProductAdsEx

#### report
- requestReport
- getReport
- downloadReportData

### SponsoredProducts  赞助商品业务

#### bidding
- getAdGroupBidRecommendations
- getKeywordBidRecommendations
- createKeywordBidRecommendations
- getBidRecommendations

#### campaigns
- getCampaign
- getCampaignEx
- createCampaigns
- updateCampaigns
- archiveCampaign
- listCampaigns
- listCampaignsEx

#### groups
- getAdGroup
- getAdGroupEx
- createAdGroups
- updateAdGroups
- archiveAdGroup
- listAdGroups
- listAdGroupsEx

#### keywords


#### product_ads
- getProductAd
- getProductAdEx
- createProductAds
- updateProductAds
- archiveProductAd
- listProductAds
- listProductAdsEx

#### product_ads
- getProductAd
- getProductAdEx
- createProductAds
- updateProductAds
- archiveProductAd
- listProductAds
- listProductAdsEx

#### product_targeting
- getTargetingClause
- listTargetingClauses
- getTargetingClauseEx
- listTargetingClausesEx
- createTargetingClauses
- updateTargetingClauses
- createTargetRecommendations
- getTargetingCategories
- getRefinementsForCategory
- getBrandRecommendations

#### report
- requestReport
- getReport
- downloadReportData




