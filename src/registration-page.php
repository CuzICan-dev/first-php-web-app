<?php
declare(strict_types=1);

require_once 'path.php';
require_once 'controllers/users.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awsem icons -->
  <script src="https://kit.fontawesome.com/56293581bc.js" crossorigin="anonymous"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="styles/root.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/register-form.css">
  <link rel="stylesheet" href="styles/footer.css">

  <title>My Blog</title>
</head>
<body>
  <?php include ('./include/header.php'); ?>

  <main class="form-wrapper">
  <form method="post" action="registration-page.php">
    <h2>Register Your Account</h2>
    <div class="input-wrapper error-msg">
      <p> <?= $errMsg ?> </p>
    </div>
    <div class="input-wrapper">
      <label for="login-name-input">Login Name</label>
      <input id="login-name-input" type="text" name="login-name" value="<?= $login ?>" placeholder="enter your login name">
    </div>
    <div class="input-wrapper">
      <label for="email-input">Email</label>
      <input id="email-input" type="text" name="email" value="<?= $email ?>" placeholder="enter your Email">
      <span class="abbreviation">Your mail won't be used for spam</span>
    </div>
    <div class="input-wrapper">
      <label for="password-input">Password</label>
      <input id="password-input" type="password" name="password" placeholder="enter your Password">
    </div>
    <div class="input-wrapper">
      <label for="password-repeat-input">Repeat Password</label>
      <input id="password-repeat-input" type="password" name="password-repeat" placeholder="enter your Password again">
    </div>
    <div class="buttens-holder">
      <button type="submit" class="submit-btn" name="button-reg">Register</button>
      <a class="login-link" href="#">Log-in</a>
    </div>
  </form>
  </main>

  <?php include ('./include/footer.php'); ?>
</body>
</html>