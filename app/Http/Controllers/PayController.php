<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yansongda\Pay\Pay;

class PayController extends Controller
{

	 protected $config = [
        'alipay' => [
            'app_id' => '2016083101829857',
            'notify_url' => 'http://huawei.cn/notify',
            'return_url' => 'http://huawei.cn/return',
            'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAkjHkm7K67KSRm0NuF3mHzfCuI9ObwFVR/CSOhuKaT5DhDOvb1c4rsO7rRgPFD/Zgl5KOUTlV+1yPK/HvMfw0LQIoCbXXIv5ubRhQB1b3NCM6nN0EyyeAekaa6Y9aMOtD42/B50RJC6mQH2bnCHuoIgPGYZlsvQAa1ZEDwO87iV7ptXiSGVcJpQi1Gx2rkuh02oPzpRSH1yS/iyrvd80YpjrxqmWDRC8nWdRTZepw2AO6LxoSX2sIji+t7sXuThT37AJnmZcFATQwujhRzhfvJHFYxPKB2wLOzXtlyYq03ukbbsQI6BR4HKVelFgsxo4G6hGjzy8E+AOeoXeeQGY6qQIDAQAB',
            'private_key' => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCSMeSbsrrspJGbQ24XeYfN8K4j05vAVVH8JI6G4ppPkOEM69vVziuw7utGA8UP9mCXko5ROVX7XI8r8e8x/DQtAigJtdci/m5tGFAHVvc0Izqc3QTLJ4B6Rprpj1ow60Pjb8HnREkLqZAfZucIe6giA8ZhmWy9ABrVkQPA7zuJXum1eJIZVwmlCLUbHauS6HTag/OlFIfXJL+LKu93zRimOvGqZYNELydZ1FNl6nDYA7ovGhJfawiOL63uxe5OFPfsAmeZlwUBNDC6OFHOF+8kcVjE8oHbAs7Ne2XJirTe6RtuxAjoFHgcpV6UWCzGjgbqEaPPLwT4A56hd55AZjqpAgMBAAECggEAMVrQr9OmEW/5jC42g4xO0bK4R3YP9d2YAQSibV0g9U2W/JK/s62XyHLQUOHC7IGj2GfszfUKVwLHfvF9bCWVw8Afni+agsDcrM3xbpjoedyO1Bg1nxQl5qHheIohy7QRRj4beyTteBd1hXRq+M0uVNVratWuBRx88q6zUrYxJk22/QKlLZ77vadvQeRz3bFnpNPUrWiYhzxn03i5nhOF8N3FkybWstVfRDa/d5QueHybmP9y18IDKYTterdxYey3MAWS2+cVCmMcUzrjerwNwvB7RhMgYX5AVeNTz1EmptrC8sY3ph/qYirUITSPqXMpECfnk9huSuUz8eBPFthFUQKBgQDDul4ISL5umCf8wQjhVhdDlJ5SOAxf7dTN9S5SWxg/0VwuuAkkUZwGlBsbsU0BQj+KTIRVnCcq3ccHFLBvh5wfw1wh3NSIvcsEvSo+fAi0Ucbmqhx0R4mhjPvDkRio0yVLUuBwROF8MNdoDRswfNDEJX5MLRRWjPU6c2DtPBn8zQKBgQC/Nrs3phVyz9c7tZi7ioujN8OGrvVF/EEQKyAuR4oMDNcwcL3vpFhNRCTZ6Qix6WLmeVxz+y0PqwQOilQdQPsMGjNXwkSb+RRT6i5Km/1V+q+Otmj7q00v70nMj78MxlwJzjC+hv65qrG3NqQO4cSLW7kTw0nmQRV2e90JFDn1TQKBgQCjKC0QjMsp1+6ldKiZZrGX5UCg2xX9tX0KftKxVjx9nmFQlJsSSnFczoNWb1L4tKfQ+n3p+3Ru+FbboTR+lDXiCHE5zSLiJgwhlCqt0alT30OFrtJvX97r62FHoiFDQle5VYnALLsmUnSNyTccET/Z8kM47u8gQvp9Uga/W7VyFQKBgQC1swiMhOH0y9O3BYUxESJH4wGFxlOEQYSCHLjjwU9IzBrgCQIz6nOOWKa7+1kr1p8Ia2KTQ6c6MEQWnRP5CHqGsY8AYbZYkIPkia+bbkd5oFGax3NTUyBx4Gy8Wgwt04A6QRjIs/bx72YYt2+GRLtDwdFJGlXq2wXOJT2RFwtMMQKBgBJwW3QiPpoLPp3itGiVYXOtby84/aw0a8tvqOHaAueK6H3tf2LkXT+k/iq2xq3QOLLX/NTmb2oE69SNNQ6qliZlSHZg1PGFY8K0TKbUeWpXf4MHzM3kTSB4C2GA9siRAHPoTY3qT85641jhMe1LU1qd7tv3w8FFaG2ndmCI/qJp',
        ],
    ];

    public function index(){
    	 $config_biz = [
            'out_trade_no' => time(),
            'total_amount' => '0.01',
            'subject'      => 'MR.Five by_轻声的和',
        ];

        $pay = new Pay($this->config);

        return $pay->driver('alipay')->gateway()->pay($config_biz);
    }

    public function return(Request $request)
    {
        $pay = new Pay($this->config);

        return $pay->driver('alipay')->gateway()->verify($request->all());
    }


    public function notify(Request $request)
    {
        $pay = new Pay($this->config);

        if ($pay->driver('alipay')->gateway()->verify($request->all())) {
            // 请自行对 trade_status 进行判断及其它逻辑进行判断，在支付宝的业务通知中，只有交易通知状态为 TRADE_SUCCESS 或 TRADE_FINISHED 时，支付宝才会认定为买家付款成功。 
            // 1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号； 
            // 2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额）； 
            // 3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）； 
            // 4、验证app_id是否为该商户本身。 
            // 5、其它业务逻辑情况
            file_put_contents(storage_path('notify.txt'), "收到来自支付宝的异步通知\r\n", FILE_APPEND);
            file_put_contents(storage_path('notify.txt'), '订单号：' . $request->out_trade_no . "\r\n", FILE_APPEND);
            file_put_contents(storage_path('notify.txt'), '订单金额：' . $request->total_amount . "\r\n\r\n", FILE_APPEND);
        } else {
            file_put_contents(storage_path('notify.txt'), "收到异步通知\r\n", FILE_APPEND);
        }

        echo "success";
    }


    
}
