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

  <title>My Blog</title>
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

  <section class="post-slider">
    <h2>Top Publications</h2>
    <div class="slider-wrapper">
      <button class="carousel-button prev"><i class="fa-solid fa-chevron-left fa-2xl"></i></button>
      <button class="carousel-button next"><i class="fa-solid fa-chevron-right fa-2xl"></i></button>
      <ul class="slider">
        <li class="slider-item">
          <img src="images/image_1.png" alt="image_1">
          <h3 class="title">First Slide Lable</h3>
        </li>

        <li class="slider-item">
          <img src="images/image_2.png" alt="image_2">
          <h3 class="title">Second Slide Label</h3>
        </li>

        <li class="slider-item">
          <img src="images/image_3.png" alt="image_3">
          <h3 class="title">Third Slide Label</h3>
        </li>

        <li class="slider-item">
          <img src="images/image_4.png" alt="image_4">
          <h3 class="title">Fourth Slide Label</h3>
        </li>

        <li class="slider-item">
          <img src="images/image_5.png" alt="image_5">
          <h3 class="title">Fifth Slide Label</h3>
        </li>

        <li class="slider-item">
          <img src="images/image_6.png" alt="image_6">
          <h3 class="title">Sixth Slide Label</h3>
        </li>

        <li class="slider-item">
          <img src="images/image_7.png" alt="image_7">
          <h3 class="title">Seventh Slide Label</h3>
        </li>
      </ul>
    </div>
  </section>

  <script>
    const sliderContainer = document.querySelector('.slider-wrapper');
    const slider = document.querySelector('.slider');
    const nextBtn = document.querySelector('.carousel-button.prev');
    const prevBtn = document.querySelector('.carousel-button.next');

    let sliders = document.querySelectorAll('.slider-item');
    let index = 1;

    const firstClone = sliders[0].cloneNode(true);
    const lastClone = sliders[sliders.length - 1].cloneNode(true);


  </script>
</body>
</html>

