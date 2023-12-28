<?php

require_once './clients/book/model/book.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$checkQuantity =  getBookDetail($id);
$checkStatus = $checkQuantity['quantity'];
if ($checkStatus == 0) {
    setFlashData('msg', 'Hiện tại sách đã hết hàng, vui lòng đặt mua sau');
    setFlashData('msg_type', 'danger');
    redirect('?module=book&action=detail&id=' . $id);
}

if (!isLoginStudent()) {
    setFlashData('msg', 'Vui lòng đăng nhập trước khi đặt hàng');
    setFlashData('msg_type', 'danger');
    redirect('?module=book&action=detail&id=' . $id);
}

if (isPost()) {
    $body = getBody();

    $errors = [];

    // validate

    if (empty(trim($body['fullname']))) {
        $errors['fullname'] = 'Họ và tên không được để trống';
    }

    if (empty(trim($body['email']))) {
        $errors['email'] = 'Email không được để trống';
    } else {
        if (!isEmail(trim($body['email']))) {
            $errors['email'] = 'Email không đúng định dạng';
        }
    }

    if (empty(trim($body['phone']))) {
        $errors['phone'] = 'Số điện thoại không được để trống';
    } else {
        if (!isPhone(trim($body['phone']))) {
            $errors['phone'] = 'Số điện thoại không đúng định dạng';
        }
    }

    if (empty(trim($body['address']))) {
        $errors['address'] = 'Địa chỉ không được để trống';
    }

    if (!empty($errors)) {
        setFlashData('msg', 'Vui lòng kiểm tra lại dữ liệu');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
        redirect('?module=book&action=buy&id=' . $id);
    }

    if (empty($body['pay'])) {
        setFlashData('msg_pay', 'Vui lòng chọn phương thức thanh toán');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
        redirect('?module=book&action=buy&id=' . $id);
    }

    if (!empty($body['pay'])) {
        $pay = $body['pay'];
        $price = $body['price'];

        $code = time() . "";
        //------------------------------------------------ Thanh toan momo_atm---------------------------------------------------------
        if ($pay == 'momo_atm') {
            header('Content-type: text/html; charset=utf-8');

            setFlashData('body', $body);
            function execPostRequest($url, $data)
            {
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt(
                    $ch,
                    CURLOPT_HTTPHEADER,
                    array(
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($data)
                    )
                );
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                //execute post
                $result = curl_exec($ch);
                //close connection
                curl_close($ch);
                return $result;
            }


            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            $orderInfo = "Thanh toán qua MoMo";
            $amount = $price;
            $orderId = time() . "";
            $redirectUrl = "http://localhost/project_one_sonline/?module=book&action=momo_atm&code=" . $code . '&id=' . $id;
            $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
            $extraData = "";

            $requestId = time() . "";
            $requestType = "payWithATM";
            // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array(
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json

            //Just a example, please check more in there
            header('Location: ' . $jsonResult['payUrl']);
        } else if ($pay == 'vnpay') {
            //------------------------------------------------ Thanh toan vnpay---------------------------------------------------------
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
            date_default_timezone_set('Asia/Ho_Chi_Minh');

            $code = time() . "";
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://localhost/project_one_sonline/?module=book&action=vnpay&code=" . $code . '&id=' . $id;
            $vnp_TmnCode = "CJQLSZK0"; //Mã website tại VNPAY 
            $vnp_HashSecret = "PQGKUSFGBQOLLFANZNVGCDLJYREUIXPI"; //Chuỗi bí mật
            $vnp_apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/merchant.html";

            $startTime = date("YmdHis");
            $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

            $vnp_TxnRef = $code; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Thanh toán đơn hàng đặt tại web';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $price * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

            $vnp_ExpireDate = $expire;

            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                "vnp_ExpireDate" => $vnp_ExpireDate
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }

            //var_dump($inputData);
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00', 'message' => 'success', 'data' => $vnp_Url
            );
            if (isset($_POST['redirect'])) {
                setFlashData('body', $body);
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
        } else if ($pay == 'momo_qr') {
            //------------------------------------------------ Thanh toan momo qr---------------------------------------------------------
            header('Content-type: text/html; charset=utf-8');

            function execPostRequest($url, $data)
            {
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt(
                    $ch,
                    CURLOPT_HTTPHEADER,
                    array(
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($data)
                    )
                );
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                //execute post
                $result = curl_exec($ch);
                //close connection
                curl_close($ch);
                return $result;
            }


            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            $orderInfo = "Thanh toán qua mã qr MoMo";
            $amount = $price;
            $orderId = time() . "";
            $redirectUrl = "http://localhost/project_one_sonline/index.php?module=book&action=buy&id=" . $id;
            $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
            $extraData = "";

            $requestId = time() . "";
            $requestType = "captureWallet";
            // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array(
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json
            echo '<pre>';
            print_r($jsonResult);
            echo '</pre>';

            //Just a example, please check more in there

            header('Location: ' . $jsonResult['payUrl']);
        }
    }
}


$data = [
    'book_detail' => getBookDetail($id),
];

if (isLoginStudent()) {
    $studentDetail = isLoginStudent();
    $data['student_info'] = $studentDetail;
}
viewClient($data);