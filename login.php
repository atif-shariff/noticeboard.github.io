<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- CSS -->
  <link rel="stylesheet" href="css/login.css">
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <section class="container forms">
    <div class="form login">
      <div class="form-content">
        <header>Login</header>
        <form method="post" action="login.php">
          <?php include('error.php'); ?>
          <div class="field input-field">
            <input type="text" placeholder="Enter your username" class="input" required name="username">
          </div>
          <!-- <div class="field input-field">
            <input type="email" placeholder="Email" class="input" required name="email">
          </div> -->
          <div class="field input-field">
            <input type="password" placeholder="Password" class="password" required name="password">
            <i class='bx bx-hide eye-icon'></i>
          </div>
          <div class="field button-field">
            <button type="submit" name="login_user">Login</button>
          </div>
        </form>
        <div class="form-link">
          <span>Don't have an account? <a href="signup.php">Signup</a></span>
          <br>
          <a href="index.php">Home</a>
        </div>
      </div>
    </div>
  </section>
  <!-- JavaScript -->
  <script src="js/script.js"></script>
</body>
</html>