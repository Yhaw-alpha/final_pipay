<?php

session_start();
require 'conn.php';
if(isset($_POST['pay'])){

    $payment_method = $_POST['payment_method'];
    

    if($payment_method == 1 || $payment_method == 2 || $payment_method == 3){
        
        $phone = $_POST['phone'];
        $amount = $_POST['amount_'];

        echo $amount;
        $student_id = $_SESSION['id'];
        $transaction_id = time().'_'.$student_id;
        
        $_SESSION['payment'] = [
            "phone" => $phone,
            "amount" => $amount,
            "student_id" => $student_id,
            "payment_method" => $payment_method,
        ];

        
        

        // $sql = "INSERT INTO `payment`.`transactions` (`transaction_id`, `student_id`, `date_time`, `amount`, `payment_method_id`, `card_name`, `number`, `card_expiry_date`) 
        //                                         VALUES ('$transaction_id', '$student_id', now(), '$amount', '$payment_method', null, '$phone', null);";


        
        // $query = mysqli_query($conn, $sql);
        
        
            header("Location: /pi_pay/payment_confirmation.php");
            exit();
        




    }elseif($payment_method == 4 || $payment_method == 5){


        $amount = $_POST['amount'];
        $card_name = $_POST['card_name'];
        $card_number = $_POST['card_number'];
        $cvv = $_POST['cvv'];
        $expiry_date = $_POST['expiry_date'];
        $student_id = $_SESSION['id'];
        $transaction_id = time().'_'.$student_id;


        $sql = "INSERT INTO `payment`.`transactions` (`transaction_id`, `student_id`, `date_time`, `amount`, `payment_method_id`, `card_name`, `number`, `card_expiry_date`, `momo_trans_id`, `cvv`) 
                                                    VALUES ('$transaction_id', '$student_id', now(), '$amount', '$payment_method', '$card_name', '$card_number', '$expiry_date', 'null', '$cvv');";
        
        $query = mysqli_query($conn,$sql);

        if($query){
            header("Location: /pi_pay/home.php");
            exit();
        }

    }


}


















?>