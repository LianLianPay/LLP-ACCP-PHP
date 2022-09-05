<?php

use llianpay\accp\client\LLianPayClient;
use llianpay\accp\params\TradeCreateParams;
use llianpay\accp\params\TradeCreateOrderInfo;
use llianpay\accp\params\TradeCreatePayeeInfo;

require '../vendor/autoload.php';
require '../src/cfg.php';
require '../src/client/LLianPayClient.php';
require '../src/params/TradeCreateParams.php';
require '../src/params/TradeCreateOrderInfo.php';
require '../src/params/TradeCreatePayeeInfo.php';

// 测试“统一支付创单”接口https://open.lianlianpay.com/docs/accp/accpstandard/accp-tradecreate.html
function test_tradeCreate()
{
    // 构建请求参数
    $params = new TradeCreateParams();
    $current = date("YmdHis");
    $params->timestamp = $current;
    $params->oid_partner = OID_PARTNER;
    $params->txn_type = 'GENERAL_CONSUME';
    $params->user_id = 'LLianPayTest-In-User-12345';
    $params->notify_url = 'https://test.lianlianpay.com/notify';
    $params->return_url = 'https://test.lianlianpay.com/return';

    $orderInfo = new TradeCreateOrderInfo();
    $orderInfo->txn_seqno = 'LLianPayTest' . $current;
    $orderInfo->txn_time = $current;
    $orderInfo->total_amount = 2.00;
    $params->orderInfo = $orderInfo;

    $u_payeeInfo = new TradeCreatePayeeInfo();
    $u_payeeInfo->payee_id = 'LLianPayTest-En-User-12345';
    $u_payeeInfo->payee_type = 'USER';
    $u_payeeInfo->payee_amount = '1.00';

    $m_payeeInfo = new TradeCreatePayeeInfo();
    $m_payeeInfo->payee_id = OID_PARTNER;
    $m_payeeInfo->payee_type = 'MERCHANT';
    $m_payeeInfo->payee_amount = '1.00';
    $params->payeeInfo = array($u_payeeInfo, $m_payeeInfo);

    // 测试环境地址
    $url = 'https://accpapi-ste.lianlianpay-inc.com/v1/txn/tradecreate';
    $result = LLianPayClient::sendRequest($url, json_encode($params));
    echo $result;
}

test_tradeCreate();