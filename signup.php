<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <!-- CSS -->
  <link rel="stylesheet" href="signup.css">
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <section class="container">
    <div class="signup">
        <div class="form-content">
        <header>Signup</header>
        <form method="post" action="signup.php">
          <?php include('error.php'); ?>

          <div class="field input-field">
            <input type="text" placeholder="Username" class="input" name="username" value="<?php echo $username; ?>">
          </div>
          <div class="field input-field">
            <input type="email" placeholder="Email" class="input" name="email" value="<?php echo $email; ?>">
          </div>
    
          <div class="field input-field">
            <input type="password" placeholder="Password" class="password" name="password_1">
            <i class='bx bx-hide eye-icon'></i>
          </div>
    
          <div class="field input-field">
            <input type="password" placeholder="Confirm password" class="password"  name="password_2">
            <i class='bx bx-hide eye-icon'></i>
          </div>
    
          <div class="field button-field">
            <button type="submit" name="reg_user">Signup</button>
          </div>
        </form>
    
        <div class="form-link">
          <span>Already have an account? <a href="login.php">Login</a></span><br>
          <a href="index.php">Home</a>
        </div>
      </div>
    
    </section>
    </body>
    </html>
