<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pi Pay | Need Helps</title>
    <link rel="stylesheet" href="support.css">
    <script src="extra/js/jquery.js"></script>
    <link rel="stylesheet" href="extra/css/bootstrap.min.css">
    <link rel="stylesheet" href="extra/fontawesome-free-5.15.4-web/css/all.css">

    <script defer src="extra/fontawesome-free-5.15.4-web/js/all.js"></script>
</head>

<body>
        <div class="navigation_bar shadow p-3 mb-4 bg-white rounded">
            <div class="menu">
                <div class="logo shadow p-1 mb-2 bg-white rounded" style="font-weight:600;">
                    <a href="home.php" class="p-1 d-flex">
                        <img src="extra/img/logo.png" alt="logo" style="height: 30px; width: 30px;">
                        <span id="logo_text">Pay</span>
                    </a>
                </div>
            </div>
            <div class="profile">
                <div class="username"><?php echo $_SESSION['name'];  ?></div>
                <i class="fas fa-user i" style="margin: 4px; overflow:hidden"></i>
                <a class="text-white bg-danger p-2 rounded" href="logout.php" style="text-decoration: none; ">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <!-- <div class=""></div> -->
            </div>
        </div>

        <div class="nav bg-success" style="margin: left 20px;">
            <a href="home.php" style="padding: 5px; text-decoration:none; font: weight 700px; color:#ffffff;border: radius 50%;">
            <i class="fas fa-arrow-left"></i> Dashboard</a>
        </div></div>

    <div class="container-fluid"> 
        <div class="row px-5">
        <div class="col-sm-6">
            <div>
                <h3 class="heading">Talk to Us</h3>
                <p class="text-warning">
                    Fill up the form and our Team will get back to you within in 24
                    hours
                </p>
            </div>
            <div class="links" id="bordering">
                <div class="address text-white p-3">
                    <i class="fas fa-phone icon text-warning pr-3">
                    </i>+233 548 558 531
                </div>
                <div class="address text-white p-3">
                    <i class="fas fa-envelope icon text-warning ">
                    </i>info@pipay.com
                </div>
                <div class="address text-white p-3">
                    <i class="fas fa-map-marker icon text-warning pr-3">
                    </i>452 Fiapre, Sunyani
                </div>
            </div>
        </div>
        <div class="col-sm-6 pad">
            <form class="rounded msg-form">
                <div class="form-group">
                    <label for="name" class="h6">Your Name</label>
                    <div class="input-group border rounded">
                        <div class="input-group-addon px-2 pt-1">
                            <p class="fas fa-user text-primary"></p>
                        </div>
                        <input type="text" class="form-control border-0" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="h6">Email</label>
                    <div class="input-group border rounded">
                        <div class="input-group-addon px-2 pt-1">
                            <i class="fas fa-envelope text-primary"></i>
                        </div>
                        <input type="text" class="form-control border-0" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="msg" class="h6">Message</label>
                    <textarea name="message" id="msgus" cols="10" rows="5" class="form-control bg-light" placeholder="Message"></textarea>
                </div>
                <div class="form-group p-3 m-2 d-flex justify-content-end">
                    <input type="submit" class="btn btn-success text-white" value="send message" />
                </div>
            </form>
        </div>
        </div>
    </div>


    <div class="footer shadow p-3 mb-2 mt-2">
        &copy All Rights Reserved 2022 | Department of Information Technology Society | Final Year Project 2022 | DIT L200 | Group 28 | 2022
    </div>

    <script>
        let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 10){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
    </script>
</body>

</html>