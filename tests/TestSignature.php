<?php

use llianpay\accp\security\LLianPayAccpSignature;

require '../vendor/autoload.php';
require '../src/cfg.php';
require '../src/security/LLianPayAccpSignature.php';

function test_sign()
{
    $data = '{"app_name":"test","encrypt_algorithm":"RSA","flag_chnl":"H5","oid_partner":"2020042200284052","pkg_name":"test","timestamp":"20220831151608","user_id":"LLianPayTest-In-User-12345"}';
    $result = LLianPayAccpSignature::sign($data);
    echo 'MD5值: ' . md5($data) . '<br/>';
    echo '签名值: ' . $result . '<br/>';
}

function test_checkSign()
{
    $data = '{"license":"UjNpRHFyYWhSYzk5R1AzcTBCb1ZucURyLzhpekNiN1dGYkRWM1A3NjlnSzZnK0VZMDVzeno3akYrYS84VlR4UHhxRkFJRjJmeWdWKzJsU1hTV2hNMzg5WTBpbFk0bGhzU01GcXQvOTcyQmZ4akNtUXlrNEpMVnk0OXR0eXhRZ3RpYmFIMXkxcHg5UDZIbnBweG8rbGZqcS9Yekh1VGJ1K3kyZnBFS3didC9nPXsiaWQiOjAsInR5cGUiOiJ0ZXN0IiwicGxhdGZvcm0iOjEwLCJub3RiZWZvcmUiOiIyMDIyMDUzMCIsIm5vdGFmdGVyIjoiMjAyMjExMzAifQ==","map_arr":"WycxMDYnLCAnODQnLCAnNTgnLCAnMTAxJywgJzg1JywgJzEyMCcsICcxMTEnLCAnMzgnLCAnMTIyJywgJzU5JywgJzEwOCcsICc3NScsICc5OCcsICc3OScsICc0MycsICc3OCcsICc5NCcsICc4MCcsICcxMDQnLCAnNzYnLCAnMTIzJywgJzgzJywgJzkzJywgJzU0JywgJzUyJywgJzU1JywgJzM1JywgJzQxJywgJzg4JywgJzkwJywgJzY0JywgJzQ1JywgJzg3JywgJzEwMCcsICc2NycsICc0OScsICc5MScsICc0MicsICc5NycsICc0NicsICc4OScsICcxMDInLCAnNTEnLCAnNTMnLCAnMzYnLCAnNjEnLCAnODYnLCAnNzQnLCAnMzknLCAnMTE2JywgJzEwOScsICcxMTInLCAnMTI0JywgJzEwMycsICcxMTknLCAnMzQnLCAnODEnLCAnNzAnLCAnMTE0JywgJzEwNycsICc5NicsICc3NycsICczNycsICc2NScsICc5NScsICc2MicsICc1MCcsICcxMTcnLCAnMTI1JywgJzkyJywgJzEyMScsICcxMTgnLCAnMzMnLCAnNzEnLCAnOTknLCAnMTEwJywgJzEyNicsICc0NCcsICcxMTMnLCAnNjgnLCAnNjknLCAnNjAnLCAnNjMnLCAnODInLCAnNDAnLCAnNzMnLCAnNDgnLCAnNTYnLCAnMTA1JywgJzQ3JywgJzU3JywgJzY2JywgJzExNScsICc3Midd","oid_partner":"2020042200284052","random_key":"94a5696e-5ce7-411e-9e5c-9077de1e88b9","random_value":"03160636186708760105019522103795","ret_code":"0000","ret_msg":"交易成功","rsa_public_content":"308189028181009017e40c4b053ef663903066618131e705a91641441d8bc5de082a12147559dcbc790e7b85a0e42a388effa2b7d0c5f734733ef14869fb735b5245bda1d79e32c35004288190e080f8abe8ae7c8f2ff81738c1c32d6e944be7ad1197cb1d8c76455d6da8d623a0513647f5a59d1e9aa6ca077f136040b550ad411728455bf6230203010001","user_id":"LLianPayTest-In-User-12345"}';
    $signature = 'RRnv2UU0myYQa3kACFRneWySWMXviJYSsY8lxyVV281N4hj9dbx5hgS3TJh2AW31Wus5q31BSI0b5jBUzGeF+F+OaWtFwmGfXWsOL0SYY4rCdeo2sXfNVwkzanPgdp9XqE2beWMXDNAFpTTjs6XfITHM8CREg6kbur7Smg6KhWM=';
    
    $result = LLianPayAccpSignature::checkSign($data, $signature);
    if ($result == 1) {
        echo '验签结果: 正确！';
    } else {
        echo '验签结果：错误！';
    }
}

//test_sign();
test_checkSign();
