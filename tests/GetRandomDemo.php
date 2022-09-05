<?php

use llianpay\accp\client\LLianPayClient;
use llianpay\accp\params\GetRandomParams;

require '../vendor/autoload.php';
require '../src/cfg.php';
require '../src/client/LLianPayClient.php';
require '../src/params/GetRandomParams.php';

// 测试“随机因子获取”接口https://open.lianlianpay.com/docs/accp/accpstandard/get-random.html
function test_getRandom()
{
    // 构建请求参数
    $params = new GetRandomParams();
    $params->timestamp = date("YmdHis");
    $params->oid_partner = OID_PARTNER;
    $params->user_id = 'LLianPayTest-In-User-12345';
    $params->flag_chnl = 'H5';
    $params->pkg_name = 'test';
    $params->app_name = 'test';

    // 测试环境地址
    $url = 'https://accpapi-ste.lianlianpay-inc.com/v1/acctmgr/get-random';
    $result = LLianPayClient::sendRequest($url, json_encode($params));
    echo $result;
}

test_getRandom();