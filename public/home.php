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
    <link rel="stylesheet" href="../extra/home.css">
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
                <input type="text" placeholder="Search receipt..">
                <button><i class="ri-search-2-line"></i></button>
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
                    <a href="../public/home.php" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../public/pay_fees.php">
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
                    <a href="../private/logout.php">
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
                    <h2 class="section--title">Overview</h2>
                    <select name="date" id="date" class="dropdown">
                        <option value="today">Today</option>
                        <option value="lastweek">Last Week</option>
                        <option value="lastmonth">Last Month</option>
                        <option value="lastyear">Last Year</option>
                        <option value="alltime">All Time</option>
                    </select>
                </div>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Balance</h5>
                                <h1>9404</h1>
                            </div>
                            <i class="ri-exchange-funds-fill card--icon--lg"></i>
                        </div>
                        
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Credit</h5>
                                <h1>1404</h1>
                            </div>
                            <i class="ri-coins-line card--icon--lg"></i>
                        </div>
                       
                    </div>
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Debit</h5>
                                <h1>2081</h1>
                            </div>
                            <i class="ri-exchange-dollar-line card--icon--lg"></i>
                        </div>
                       
                    </div>
                    
                </div>
            </div>
            <div class="doctors">
                <div class="title">
                    <h2 class="section--title">Activity</h2>
                    <div class="doctors--right--btns">
                        
                        <a href="../public/pay_fees.php">
                            <button class="add"><i class="ri-coin-line"></i>Make Payment</button>
                        </a>
                        <a href="../public/support.php">
                            <button class="add"><i class="ri-24-hours-line"></i>Contact Us</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Transaction history section -->
            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title">Recent Transaction</h2>
                    <a href="../public/payment_history.php">
                        <button class="add"><i class="ri-exchange-dollar-line"></i>All Transaction</button>
                    </a>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Academic Year</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Balance</th>
                                <th>Note</th>
                                <th>Payment Method</th>
                                <th>Transaction ID</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2021/2022</td>
                                <td>30-07-2022</td>
                                <td>3:21:55</td>
                                <td>1000</td>
                                <td>2070</td>
                                <td>1070</td>
                                <td>Fee Payment</td>
                                <td>Vodacash</td>
                                <td>000012345678</td>
                                <td class="pending">pending</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2021/2022</td>
                                <td>30-07-2022</td>
                                <td>3:21:55</td>
                                <td>1000</td>
                                <td>2070</td>
                                <td>1070</td>
                                <td>Fee Payment</td>
                                <td>Visa card</td>
                                <td>1475200954754</td>
                                <td class="confirmed">Approved</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2021/2022</td>
                                <td>30-07-2022</td>
                                <td>3:21:55</td>
                                <td>1000</td>
                                <td>2070</td>
                                <td>1070</td>
                                <td>Fee Payment</td>
                                <td>Master card</td>
                                <td>0000123785878</td>
                                <td class="confirmed">Approved</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2021/2022</td>
                                <td>26-05-2022</td>
                                <td>08:31:22</td>
                                <td>523</td>
                                <td>1625</td>
                                <td>188</td>
                                <td>School Fees</td>
                                <td>AirtelTigo</td>
                                <td>000009875678</td>
                                <td class="rejected">Rejected</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2021/2022</td>
                                <td>30-08-2022</td>
                                <td>2:12:05</td>
                                <td>1500</td>
                                <td>2070</td>
                                <td>1070</td>
                                <td>Fee Payment</td>
                                <td>MTN MoMo</td>
                                <td>0000127654w8</td>
                                <td class="confirmed">Approved</td>
                            </tr>
                                                                                   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="../private/assets/js/main.js"></script>
</body>

</html>