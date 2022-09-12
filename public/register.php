

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="I=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <script src="../extra/js/jquery.js"></script>
  <link rel="stylesheet" href="../extra/register.css">
  <link rel="stylesheet" href="../extra/css/bootstrap.min.css">
  <link rel="stylesheet" href="../extra/fontawesome-free-5.15.4-web/css/all.css">
  <title>Register | Pipay</title>
</head>

<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="../private/signup.val.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your First name" required name="first_name">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your  Last name" required name="last_name">
          </div>
          <div class="input-box">
            <span class="details">Student ID</span>
            <input type="text" placeholder="Enter your Student ID number" required name="student_id">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your phone number" required name="phone">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required name="password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required name="confirm_password">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="register">
        </div>
      </form>
      <div class="text-center">Already have an account ? <a href="../public/index.php">Login Now</a></div>
    </div>
  </div>

</body>
</html>
