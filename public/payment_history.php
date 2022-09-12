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
    <link rel="stylesheet" href="../extra/tx_history.css">
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
                    <a href="../public/home.php">
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
                    <a href="../public/payment_history.php" id="active--link">
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
                    <h2 class="section--title">History</h2>
                    <select name="date" id="date" class="dropdown">
                        <option value="today">Today</option>
                        <option value="lastweek">Last Week</option>
                        <option value="lastmonth">Last Month</option>
                        <option value="lastyear">Last Year</option>
                        <option value="alltime">All Time</option>
                    </select>
                </div>
                
            </div>
            
            <!-- Transaction history section -->
            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title">Payment History</h2>
                    <a href="../public/pay_fees.php">
                        <button class="add"><i class="ri-coin-line"></i>Make Payment</button>
                    </a>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Academic Year</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Note</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

$sql = "SELECT transactions.transaction_id, payment_methods.payment_method, transactions.amount, transactions.date_time 
FROM payment.transactions
inner join payment_methods on transactions.payment_method_id = payment_methods.id
where transactions.student_id = '$id'";
$query = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($query)){ ?>


<tr scope="row">
    
    <td><?php echo $row['transaction_id']; ?> </td>
    <td><?php echo $row['payment_method']; ?> </td>
    <td><?php echo $row['amount']; ?> </td>
    <td><?php echo $row['date_time']; ?> </td>
</tr>

    <?php

}

?>                                                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="../private/assets/js/main.js"></script>
</body>

</html>