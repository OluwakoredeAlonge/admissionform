<?php
    session_start();
    // require_once "../user_guard.php";
    require_once "../classes/payment.php";
    //we want to retrieve the transaction details from the database by using the transaction reference in session
    //we will then send these details to paystack's endpoint 1 - initialize payment
    if(isset($_POST["btnconfirm"]) && isset($_SESSION["refno"])){
        $p = new Payment;
        $deets = $p->get_pay_ref($_SESSION["refno"]);
        $amt = $deets['payment_amount'];
        $email = $deets['payee_email'];
       // $business = $deets['bis_name'];
        $reference = $_SESSION['refno'];
        $payrsp = $p->paystack_init_step_one($amt, $email, $reference);
        if($payrsp && $payrsp->status == true){
                $auth_url = $payrsp->data->authorization_url;
                header("location: $auth_url");
            }else{
                $_SESSION['errormsg'] = "Payment could not be initiated, Try again". $payrsp->message;
                header("location:../index.php");exit();
            }
        }else{
        header("location:../index.php");exit();
    }
?>