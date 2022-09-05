<?php

namespace llianpay\accp\params;

// 统一支付创单---商户订单信息
class TradeCreateOrderInfo
{
    public string $txn_seqno;
    public string $txn_time;
    public float $total_amount;
    public float $fee_amount;
    public string $order_info;
    public string $goods_name;
    public string $goods_url;
    public string $coupon_pay_mode;
}