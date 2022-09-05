<?php

namespace llianpay\accp\params;

// 统一支付创单---收款方信息
class TradeCreatePayeeInfo
{
    public string $payee_id;
    public string $payee_type;
    public string $payee_accttype;
    public string $payee_amount;
    public string $payee_memo;
}