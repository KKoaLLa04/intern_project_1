<?php

require_once './clients/cart/model/cart.php';
if (isLoginStudent() || isLoginTeacher()) {
    if (isLoginStudent()) {
        $studentDetail = isLoginStudent();
        $studentId = $studentDetail['id'];
        $studentCart = getAllCart($studentId);
    } else {
        setFlashData('msg', 'Trang dành cho clients');
        setFlashData('msg_type', 'danger');
        redirect('index.php');
    }
} else {
    setFlashData('msg', 'Bạn phải đăng nhập để vào giỏ hàng');
    setFlashData('msg_type', 'danger');
    redirect('index.php');
}

if (!empty($_POST['redirect'])) {
    $body = getBody();

    if (empty($body['payment'])) {
        setFlashData('msg', 'Vui lòng chọn phương thức thanh toán');
        setFlashData('msg_type', 'danger');
        redirect('?module=cart&action=pay');
    }

    $code = time() . rand(0, 99);
    if (trim($body['payment']) == 'cash' || trim($body['payment']) == 'banking') {
        // Tao code id
        $dataInsert = [
            'name' => trim($body['fullname']),
            'email' => trim($body['email']),
            'address' => trim($body['address']),
            'phone' => trim($body['phone']),
            'pay' => trim($body['payment']),
            'client_id' => $studentId,
            'total' => trim($_POST['total']),
            'status' => 0,
            'code' => trim($code),
            'create_at' => date('Y-m-d H:i:s'),
        ];

        $insertStatus = insert('bill', $dataInsert);

        if (!empty($insertStatus)) {
            $dataUpdate = [
                'code_id' => $code,
                'status' => 1
            ];

            $condition = "student_id=$studentId AND status=0";

            $updateStatus = update('cart', $dataUpdate, $condition);

            // update book
            $cartCode = selectCart($code);
            foreach ($cartCode as $key => $item) {
                $quantity = $item['quantity'];
                $bookDetail = getBook($item['book_id']);
                $quantityUpdate = $bookDetail['quantity'] - $quantity;
                $dataUpdate = [
                    'quantity' => $quantityUpdate,
                    'update_at' => date('Y-m-d H:i:s')
                ];

                $condition = "id=" . $item['book_id'];

                update('book', $dataUpdate, $condition);
            }
            // end update
            if (!empty($updateStatus)) {
                redirect('?module=cart&action=thanks&code=' . $code);
            }
        }
    } else if (trim($body['payment']) == 'vnpay') {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');


        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/project_one_sonline/?module=cart&action=vnpay&code=" . $code;
        $vnp_TmnCode = "CJQLSZK0"; //Mã website tại VNPAY 
        $vnp_HashSecret = "PQGKUSFGBQOLLFANZNVGCDLJYREUIXPI"; //Chuỗi bí mật
        $vnp_apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/merchant.html";

        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        $vnp_TxnRef = $code; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán đơn hàng đặt tại web';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $body['total'] * 100;
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
            setSession('body', $body);
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    } else if (trim($body['payment']) == 'momo_atm') {
        header('Content-type: text/html; charset=utf-8');

        setSession('momo_atm', $body);
        // $body = getSession('momo_atm');
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
        $amount = $body['total'];
        $orderId = time() . "";
        $redirectUrl = "http://localhost/project_one_sonline/?module=cart&action=momo_atm&code=" . $code;
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
    } else if (trim($body['payment']) == 'momo_qr') {
        setSession('momo_qr', $body);
        redirect('?module=cart&action=momo_qr');
    }
}

$data = [
    'student_cart' => $studentCart,
];
viewClient($data);
