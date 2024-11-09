<?php  

define('root', __DIR__);
define('images', __DIR__.DIRECTORY_SEPARATOR.'images');


// var_dump(styles);
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

  <title>Document</title>
</head>
<body>
  <header>
    <nav class="header-nav">
      <a href="#">
        <h1 class="logo-link">My blog</h1>
      </a>

      <ul>
        <li><a href="#">Main</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li>
          <a href="#">
            <i class="fa-solid fa-user"></i>
            Office</a>
          <ul>
            <li><a href="#">Admin Panel</a></li>
            <li><a href="#">Exit</a></li>
          </ul>
        </li>
      </ul>

    </nav>
  </header>
</body>
</html>

