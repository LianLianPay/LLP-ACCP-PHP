# LLP-ACCP-PHP

欢迎来到连连账户+开放平台API接口的PHP示例代码仓库， 本仓库包含示例代码及必要的说明。

## 主要内容：

本仓库中所有Demo均请求连连账户+STE环境，Demo仅做参考，建议只参考签名方法，请仔细阅读Demo代码，如有问题及时群内连连技术技术。

### 前置要求：
当前使用的php-7.4.30

### 使用说明
1、keys/llianpay_public_key.pem为连连的公钥，测试环境和正式环境均为这个，不用替换。<br/>
2、keys/merchant_private_key.pem为测试商户号的私钥，如使用贵司正式商户号，此私钥要替换成商户正式的私钥。<br/>
3、keys/merchant_public_key.pem为测试商户号的公钥，如使用贵司正式商户号，此公钥要替换成商户正式的公钥。<br/>
4、src/security/LLianPayAccpSignature.php 包含签名、验签。<br/>
5、src/client/LLianPayClient.php 包含发起请求方法。<br/>

### Demo说明（持续完善中）
#### 充值/消费API：
* 统一支付创单：TradeCreateDemo.php https://open.lianlianpay.com/docs/accp/accpstandard/accp-tradecreate.html
#### 公共API：
* 随机因子获取：GetRandomDemo.php https://open.lianlianpay.com/docs/accp/accpstandard/get-random.html
