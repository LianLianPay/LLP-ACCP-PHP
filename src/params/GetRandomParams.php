<?php

namespace llianpay\accp\params;

class GetRandomParams
{
    // 时间戳，格式yyyyMMddHHmmss HH以24小时为准，如20170309143712
    public string $timestamp;
    // 商户号，ACCP系统分配给平台商户的唯一编号
    public string $oid_partner;
    // 用户在商户系统中的唯一编号，要求该编号在商户系统能唯一标识用户
    public string $user_id;
    /*
    交易发起渠道。
    ANDROID
    IOS
    H5
    PCH5
    PC
    */
    public string $flag_chnl;
    // APP包名。flag_chnl为H5时，送商户一级域名，测试环境传test
    public string $pkg_name;
    // APP应用名。flag_chnl为H5时，送商户一级域名，测试环境传test
    public string $app_name;
    /*
    加密算法。
    RSA：国际通用RSA算法
    SM2 ：国密算法
    默认 RSA算法
    */
    public string $encrypt_algorithm;
}