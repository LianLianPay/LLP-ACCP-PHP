<?php

namespace llianpay\accp\params;

class TradeCreateParams
{
    // 时间戳，格式yyyyMMddHHmmss HH以24小时为准，如20170309143712
    public string $timestamp;
    // 商户号，ACCP系统分配给平台商户的唯一编号
    public string $oid_partner;
    /*
    交易类型。
    用户充值：USER_TOPUP
    商户充值：MCH_TOPUP
    普通消费：GENERAL_CONSUME
    担保消费：SECURED_CONSUME
    */
    public string $txn_type;
    // 用户在商户系统中的唯一编号，要求该编号在商户系统能唯一标识用户
    public string $user_id;
    /*
    用户类型。默认：注册用户。
    注册用户：REGISTERED
    匿名用户：ANONYMOUS
    */
    public string $user_type;
    // 交易结果异步通知接收地址，建议HTTPS协议。
    public string $notify_url;
    public string $return_url;
    public string $pay_expire;
    // 商户订单信息
    public TradeCreateOrderInfo $orderInfo;
    // 收款方信息
    public array $payeeInfo;
}