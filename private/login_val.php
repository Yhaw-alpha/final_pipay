<?php


session_start();
require './conn.php';

if(isset($_POST['login'])){
    
    
    
    
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];
    
    if(empty($student_id) || empty($password)){
        header("Location: /pi_pay/final_pipay/private/?error=emptyfields");
        exit();
    }else{
        
        $sql = "SELECT * FROM payment.students where student_id = '$student_id';";
        
        $query = mysqli_query($conn, $sql);
        
        $result = mysqli_num_rows($query);
        
        
        if($result > 0){
            
            $row = mysqli_fetch_assoc($query);
            $upassword = $row['password'];
            
            $passwordverify = password_verify($password,$upassword);
//            
//            
            if(!$passwordverify){
                
                
                header("Location: /pi_pay/final_pipay/private/?error=wronginput");
                exit();
                
            }else{
                
                
                $_SESSION['id'] = $row['id'];
                $_SESSION['student_id'] = $row['student_id'];
                $_SESSION['name'] = $row['firstname'];
                
                
                
                
                
                header("Location: /pi_pay/final_pipay/public/home.php");
                exit();
                
               
            }
//            
        }else{
            header("Location: /pi_pay/final_pipay/private/?error=wronginput1");
            exit();
        }
//        
//        
    }
        
        
    }else{
    
        header("Location: /pi_pay/final_pipay/private/?error");
        exit();
    
    
}










