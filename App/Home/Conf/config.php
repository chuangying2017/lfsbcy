<?php

return array(
      //'配置项'=>'配置值'
    //测试地址
 /*    'payurl'=>'http://192.168.1.86:8082/Pay/pay',//跳转支付链接
     'merchantId'=>'100020091219001',//开联通商户号
     'paykey'=>'1234567890',//开联通密钥
     'serverUrl'=>'http://opsweb.koolyun.cn/gateway/index.do',//支付提交地址
   //'serverUrl' => 'http://opsweb.koolyun.cn/mobilepay/index.do',
    'receiveUrl'=>'http://192.168.1.86:8082/Pay/responses',//支付成功回调地址
    'publickeyfile' => './App/Home/PayPublicKey/publickey-dev.txt', //公钥地址
    'saomazhifuurl'=>'http://www.luofeite.ltd/Report/recharge'//扫码支付支付成功和取消支付的跳转链接
*/	
   //正式地址
 /*   'payurl' => 'http://pay.tehou.top/Pay/pay', //跳转支付链接
    'merchantId' => '107010170223005', //开联通商户号
    'paykey' => '1234567890', //开联通密钥
    'pickupUrl'=>'http://www.luofeite.ltd/Report/recharge',
    'serverUrl'=>'https://pg.openepay.com/gateway/index.do',//支付提交地址
   // 'serverUrl' => 'https://mobile.openepay.com/mobilepay/index.do',
    'receiveUrl' => 'http://pay.tehou.top/Pay/responses', //支付成功回调地址
    'publickeyfile' => './App/Home/PayPublicKey/publickey-prd.txt', //公钥地址
    'saomazhifuurl' => 'http://www.luofeite.ltd/Report/recharge'//扫码支付支付成功和取消支付的跳转链接
	*/


	'payurls' => 'http://pay.bcweq.top/Pay/pay', //跳转支付链接
    'merchantId' => '105840170313003', //开联通商户号
    'paykey' => '23D505516E0c197e42A6bE3C0af910e', //开联通密钥
    'pickupUrl'=>'http://www.luofeite.ltd/Report/recharge',
    'serverUrl'=>'https://pg.openepay.com/gateway/index.do',//支付提交地址
   // 'serverUrl' => 'https://mobile.openepay.com/mobilepay/index.do',
    'receiveUrl' => 'http://pay.bcweq.top/Pay/responses', //支付成功回调地址
    'publickeyfile' => './App/Home/PayPublicKey/publickey-prd.txt', //公钥地址
    'saomazhifuurl' => 'http://www.luofeite.ltd/Report/recharge',//扫码支付支付成功和取消支付的跳转链接
	
	'payurl' => 'http://luofeite.ltd/Pay/pay', //跳转支付链接
	// 'saomazhifuurl' => 'https://www.luofeite.ltd/Report/recharge'//扫码支付支付成功和取消支付的跳转链接
);
