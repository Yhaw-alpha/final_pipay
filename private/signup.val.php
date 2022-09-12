<?php


require '../private/conn.php';



    if(isset($_POST['register'])){
        
        
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $student_id= $_POST['student_id'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $confirm_password= $_POST['confirm_password'];
        $phone= $_POST['phone'];




        
        
        
        
        
        
        if(empty($phone)  ||empty($firstname)  || empty($password) || empty($confirm_password) || empty($student_id) || empty($lastname) ){
            
            echo $phone;
        //    header("Location: /pi_pay/register.php?error=emptyfields");
//            
           exit();
        }else{
                
                if(!preg_match("/^[a-zA-Z0-9]*$/", $student_id)){
                    
                    
                   header("Location: /pi_pay/final_pipay/public/register.php?error=usernameerror");
                    exit();  
                    
                }else{
                    
                    
                        
                        if(strlen($password) < 8){
                            
                            header("Location: /pi_pay/final_pipay/public/register.php?error=passwordlengtherror");
                            exit();
                            
                        }else{
                            
                            if($password != $confirm_password){
                                
                                header("Location: /pi_pay/final_pipay/public/register.php?error=confirmpassworderror");
                                exit();
                            }else{
                                
                                $sql = "SELECT * FROM payment.students where student_id = '$student_id';";
                                $query = mysqli_query($conn, $sql);
                                
                                $resultcheck = mysqli_num_rows($query);
                                    
                                    if($resultcheck > 0){
                                        
                                        header("Location: /pi_pay/final_pipay/public/register.php?error=usernametaken");
                                        exit();
                                    }else{
                                        
                                        

                                        
                                        $password= password_hash($password, PASSWORD_DEFAULT);

                                        


                                        
                                        $sql = "INSERT INTO `payment`.`students` (`firstname`, `lastname`, `student_id`, `email`, `password`, `phone`) 
                                                                            VALUES ('$firstname', '$lastname', '$student_id', '$email', '$password', '$phone');"; 
                                       
                                        
                                        $query = mysqli_query($conn, $sql);
                                        
                                        if($query){
                                            header("Location: /pi_pay/final_pipay/public/?error=successful");
                                            exit();
                                            
                                        }else{
                                            
                                            header("/pi_pay/final_pipay/publicregister.php?error=notinserted");
                                            exit();
                                        }
                                                    
                                         
                                          
                                            
                                        }
                                            
                                            
                               
                            }
                        }
                    }
                }
            
            
        
        
      
        
        
    }else{
        header("Location: /pi_pay/final_pipay/public/register.php");
        exit();
    }
    

