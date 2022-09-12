<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Payment</title>
    <script src="../extra/js/jquery.js"></script>
    <link rel="stylesheet" href="../extra/index.css">
    <link rel="stylesheet" href="../extra/css/bootstrap.min.css">
    <link rel="stylesheet" href="../extra/fontawesome-free-5.15.4-web/css/all.css">
</head>
<body>
    <form action="../public/payment_confirmation_val.php" method="post">

        <input type="text" placeholder="Enter transaction id" name ="trx_id">
        <button type="submit" name="confirm">Confirm</button>
        
    </form>
</body>
</html>