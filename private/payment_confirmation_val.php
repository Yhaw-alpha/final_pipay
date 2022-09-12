<?php

session_start();
require './conn.php';
if(isset($_POST['confirm'])){

    
        
    
        
        $phone = $_SESSION['payment']['phone'];
        $amount = $_SESSION['payment']['amount'];
        $student_id = $_SESSION['payment']['student_id'];
        $transaction_id = time().'_'.$student_id;
        $payment_method = $_SESSION['payment']['payment_method'];
        $momo_trx_id = $_POST['trx_id'];
        

        $sql = "INSERT INTO `payment`.`transactions` (`transaction_id`, `student_id`, `date_time`, `amount`, `payment_method_id`, `card_name`, `number`, `card_expiry_date`,`momo_trans_id`) 
                                                VALUES ('$transaction_id', '$student_id', now(), '$amount', '$payment_method', null, '$phone', null, '$momo_trx_id' );";


       
        
        $query = mysqli_query($conn, $sql);

        if($query){
            unset($_SESSION['payment']);
            header("Location: /pi_pay/final_pipay/public/home.php");
            exit();

        }
        
            
        




    


}


















?>