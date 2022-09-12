<?php

session_start();
require '../private/conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../extra/pay_fees.css">
    <link rel="stylesheet" href="../extra/css/bootstrap.min.css">
    <link rel="stylesheet" href="../extra/fontawesome-free-5.15.4-web/css/all.css">
    <script defer src="../extra/fontawesome-free-5.15.4-web/js/all.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="../extra/js/jquery.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <!-- Top Navigation Bar -->
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Pi<span>pay</span></h2>
        </div>
        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Search is Disabled..">
            </div>
            <div class="notification--profile">
                <div class="p">
                <span class="username"><?php echo $_SESSION['name'];  ?></span>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div>
                <div class="picon profile">
                    <img src="../private/assets/images/profile.jpg" alt="profile">
                </div>
            </div>
        </div>
    </section>

    <section class="main">

        <!-- Menu Sidebar -->
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="../public/home.php">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../public/pay_fees.php" id="active--link">
                        <span class="icon icon-2"><i class="ri-coin-line"></i></span>
                        <span class="sidebar--item">Make Payment</span>
                    </a>
                </li>
                <li>
                    <a href="../public/payment_history.php">
                        <span class="icon icon-3"><i class="ri-refund-2-fill"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Payment History</span>
                    </a>
                </li>

                <li>
                    <a href="../public/support.php">
                        <span class="icon icon-6"><i class="ri-customer-service-line"></i></span>
                        <span class="sidebar--item">Support</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="../private//logout.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main-Content page -->
        <div class="main--content">
            <!-- Overview section -->
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Payment</h2>
                    <select name="payment_method" id="date" class="dropdown">
                        <option value="">Select Payment Method</option>
                        <?php

                        $sql = "SELECT * FROM payment.payment_methods;";
                        $query = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($query)) { ?>


                            <option class="payment_option" value="<?php echo $row['id']; ?>"><?php echo $row['payment_method']; ?></option>

                        <?php

                        }

                        ?>
                    </select>
                </div>

            </div>
            
                <form action="../private/payment_val.php" method="post">

                    <!-- MOBILE money PAYMENT SECTION CARD  -->

                    <div class="padding" id="momo_form">
                        <div class="row">
                            <div class="container-fluid d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <span>MOBILE MONEY PAYMENT</span>

                                                </div>

                                                <!-- <div class="col-md-6">

                                                    <img src="./final_pipay/extra/img/mtn.svg" style="width: 45px; height: 25px;">
                                                    <img src="./final_pipay/extra/img/vodafone.svg" style="width: 45px; height: 25px;">
                                                    <img src="./final_pipay/extra/img/airtel.svg" style="width: 45px; height: 25px;">

                                                </div> -->

                                            </div>

                                        </div>
                                        <div class="card-body" style="height: 250px">

                                            <div class="form-group" style="margin:7px;">
                                                <label for="cc-number" class="control-label">MOBILE NUMBER</label>
                                                <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="Enter Valid Mobile Money Number" required>
                                            </div>

                                            <div class="form-group" style="margin:7px;">
                                                <label for="numeric" class="control-label">AMOUNT (GHC)</label>
                                                <input type="tel" class="input-lg form-control cc-number" placeholder="Enter amount" required>
                                            </div>

                                            <div class="form-group text-center" style="margin:20px;">
                                                <input name="pay" value="MAKE PAYMENT" type="submit" class="btn btn-success col-sm-9 col-md-6" style="font-size: .8rem; font-weight:500;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- CARD PAYMENT SECTION CARD  -->

                    <div class="padding" id="card_form">
                        <div class="row">
                            <div class="container-fluid d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <span>CREDIT/DEBIT CARD PAYMENT</span>

                                                </div>

                                                <!-- <div class="col-md-6 text-right" >
                                                    <img src="https://img.icons8.com/color/36/000000/visa.png">
                                                    <img src="https://img.icons8.com/color/36/000000/mastercard.png">
                                                </div> -->

                                            </div>

                                        </div>
                                        <div class="card-body" style="height: 400px">
                                            <div class="form-group" style="margin:5px;">
                                                <label for="cc-number" class="control-label">CARD NUMBER</label>
                                                <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;" required>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin:5px;">
                                                        <label for="cc-exp" class="control-label">CARD EXPIRY</label>
                                                        <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="&bull;&bull; / &bull;&bull;" required>
                                                    </div>


                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin:5px;">
                                                        <label for="cc-cvc" class="control-label">CARD CVC</label>
                                                        <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="&bull;&bull;&bull;&bull;" required>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group" style="margin:5px;">
                                                <label for="numeric" class="control-label">CARD HOLDER NAME</label>
                                                <input type="text" class="input-lg form-control">
                                            </div>

                                            <div class="form-group" style="margin:5px;">
                                                <label for="numeric" class="control-label">AMOUNT (GHC)</label>
                                                <input type="tel" class="input-lg form-control cc-number" placeholder="Enter amount" required>
                                            </div>

                                            <div class="form-group text-center" style="margin: 20px;">
                                                <input name="pay" value="MAKE PAYMENT" type="submit" class="btn btn-success col-sm-9 col-md-6" style="font-size: .8rem; font-weight:500;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>


        </div>
        </div>
    </section>

    <script src="../private/assets/js/main.js"></script>
    <script src="../private/assets/js/feepayment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
</body>

</html>