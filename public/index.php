<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <script src="../extra/js/jquery.js"></script>
  <link rel="stylesheet" href="../extra/index.css">
  <link rel="stylesheet" href="../extra/css/bootstrap.min.css">
  <link rel="stylesheet" href="../extra/fontawesome-free-5.15.4-web/css/all.css">
  <title>Pi Pay | Login</title>
</head>

<body>
      <!-- <img class="bg" src="extra/img/bg.png" alt="bg-image"> -->
      
        <div class="container">

               <div class="img">
                    <img src="../extra/img/mobile_user.svg" alt="">
               </div>

                <div class="login-container">

                      <form action="../private/login_val.php" method="post">

                              <img class="avatar" src="../extra/img/profile_pic.svg" alt="user">

                              <h2>Welcome</h2>
                              <hr>

                              <div class="input-div one">
                                <div class="i">
                                  <i class="fas fa-user"></i>
                                </div>
                                <div>
                                  <h5>Username</h5>
                                  <input class="input" type="text" name="student_id" required>
                                </div>
                              </div>

                              <div class="input-div two">
                                <div class="i">
                                  <i class="fas fa-lock"></i>
                                </div>
                                <div>
                                  <h5>Password</h5>
                                  <input class="input" type="password" name="password" required>
                                </div>
                              </div>

                              <a href="#"> Forget Password? </a>

                              <input type="submit" class="loginbtn" name="login" value="Login">

                              <a href="../public/register.php"> Don't Have An Account ? <strong>Sign Up Now</strong></a>

                      </form>   
                </div>
         </div>
             
                      
    <script type="text/javascript" src="../extra/main.js"></script>
</body>
                    
</html>