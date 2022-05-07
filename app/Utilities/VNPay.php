<?php
namespace App\Utilities;

class VNPay
{
    static $vnp_TmnCode = "HI9EYM2E";
    static $vnp_HashSecret = "RZUQJKWDRAONMSAEEJILLIITJUWQAEKU";
    static $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    static $vnp_Returnurl ="/checkout/vnPayCheck";

    public static function vnpay_create_payment(array $data)
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

        $vnp_TxnRef = $data['vnp_TxnRef'];
        $vnp_OrderInfo = $data['vnp_OrderInfo'];
        $vnp_OrderType = 100000;
        $vnp_Amount = $data['vnp_Amount'] * 100;
        $vnp_Locate ='vn';

        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => self::$vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Commad" => "pay",
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" =>  $vnp_Locate,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => env('APP_URL') .self::$vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        if(isset($vnp_BankCode) && $vnp_BankCode != ""){
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key =>$value){
            if($i == 1){
                $hashdata .= '&' . $key . "=" . $value;
            }else{
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urldecode($key) . "=" . urldecode($value) . '&' ;
        }
        $vnp_Url = self::$vnp_Url . "?" . $query;
        if(isset(self::$vnp_HashSecret)){
            $vnpSecureHash = hash('sha256', self::$vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' .$vnpSecureHash;
        }
        $returnData = array('code' => '00', 'message' => 'success' , 'data' => $vnp_Url);

        return $returnData['data'];
    }
}
// ?>
