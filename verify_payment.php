<?php
session_start();
require_once "classes/Payment.php";
header("Content-Type: application/json");

// Replace with your Paystack secret key
$secret_key = "sk_test_76721330f4cfe5e825e90b224680394cbf87af71"; 

if (!isset($_GET['reference'])) {
    die(json_encode(["status" => false, "message" => "No reference supplied"]));
}

$reference = $_GET['reference'];

$url = "https://api.paystack.co/transaction/verify/" . $reference;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . $secret_key,
    "Cache-Control: no-cache",
]);

$response = curl_exec($ch);
curl_close($ch);

$paystack_response = json_decode($response, true);

if ($paystack_response && isset($paystack_response['data']['status'])) {
    if ($paystack_response['data']['status'] === "success") {
        // Payment was successful
        $amount = $paystack_response['data']['amount'] / 100;
        $email = $paystack_response['data']['customer']['email'];
        $transaction_id = $paystack_response['data']['id'];
        $payment = new Payment();
        $payment->update_payment('completed', $reference);
        $_SESSION['payment_verified'] = true;
        $_SESSION['payment_refno'] = $reference;
        $_SESSION["feedback"] = "Form purchase successful";
        header("Location: admissionform.php?reference=" . $reference);
        exit();
    } else {
        $_SESSION["errormsg"] = "Purchase failed";
        header("Location: index.php?reference=" . $reference);
        exit();
    }
} else {
    die(json_encode(["status" => false, "message" => "Invalid Paystack response"]));
}
?>
