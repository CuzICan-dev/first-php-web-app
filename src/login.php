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
    <form action="login.php" method="post">
      <h2>Login To Your Account</h2>
      <div class="input-wrapper error-msg">
        <p> <?= $errMsg ?> </p>
      </div>
      <div class="input-wrapper">
        <label for="login-name-input">Your mail</label>
        <input id="email-input" type="text" name="email" value="<?= $email ?>" placeholder="enter your Email">
        </div>
      <div class="input-wrapper">
        <label for="password-input">Password</label>
        <input name="password" id="password-input" type="password" placeholder="enter your Password">
      </div>
      <div class="buttens-holder">
        <button class="submit-btn" name="button-login">Login</button>
        <a class="login-link" href="#">Register Account</a>
      </div>
    </form>
  </main>

  <?php include ('./include/footer.php'); ?>
</body>
</html>