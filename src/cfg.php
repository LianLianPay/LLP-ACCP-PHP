<?php

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

// 商户私钥
const merchant_private_key_path = '\keys\merchant_private_key.pem';
// 商户公钥
const merchant_public_key_path = '\keys\merchant_public_key.pem';
// 连连公钥
const llianpay_public_key_path = '\keys\llianpay_public_key.pem';
// 商户id
const OID_PARTNER = '2020042200284052';
// 签名类型
const sign_type = 'RSA';

define("ROOT_PATH", dirname(__DIR__) . "/");

function Logger(): Logger
{
    // 自定义时间格式
    $dateFormat = "Y-m-d H:i:s";
    // 自定义日志内容格式
    //$output = "%datetime% > %level_name% > %channel% > %message% > %context% > %extra% \n ";
    $output = "[%datetime%] %channel%.%level_name%: %message% %context%\n";
    $line_formatter = new LineFormatter($output, $dateFormat);

    $log_stream_handler = new StreamHandler(ROOT_PATH . 'logs/app.log', Logger::DEBUG);
    $log_stream_handler->setFormatter($line_formatter);

    $log = new Logger("app");
    $log->pushHandler($log_stream_handler);
    return $log;
}
