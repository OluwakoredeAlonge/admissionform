<?php
session_start();
require_once "../classes/Payment.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data via POST
    $fname = $_POST['fname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $amount = $_POST['amount'] ?? '';
    $refno = $_POST['reference'] ?? '';
        $pay = new Payment();
        $pay->record_pay($fname, $email, $phone, $amount, $refno);
        echo "success"; // Send something back to JavaScript
        exit();
} else {
    // If someone tries to open this page manually
    echo "Access Denied";
    exit();
}
