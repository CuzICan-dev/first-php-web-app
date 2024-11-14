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
  <link rel="stylesheet" href="styles/slider.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/footer.css">

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

  <main>
    <h2>Last Publications</h2>
    <div class="main-grid">
      <div class="publications">
        <div class="publication">
          <img src="images/image_small.png" alt="">
          <div class="publication-content">
            <h2>Top 10 JavaScript Libraries to Streamline Your Development</h2>
            <div>
              <i class="fa-regular fa-user"><span>Author Name</span></i>
              <i class="fa-regular fa-calendar"><span>Mar 11, 2019</span></i>
            </div>
            <p>Description: Explore the most popular JavaScript libraries of the year! Learn how these tools can save you time, improve code quality, and enhance your web projects.</p>
          </div>
        </div>

        <div class="publication">
          <img src="images/image_small.png" alt="">
          <div class="publication-content">
            <h2>Top 10 JavaScript Libraries to Streamline Your Development</h2>
            <div>
              <i class="fa-regular fa-user"><span>Author Name</span></i>
              <i class="fa-regular fa-calendar"><span>Mar 11, 2019</span></i>
            </div>
            <p>Description: Explore the most popular JavaScript libraries of the year! Learn how these tools can save you time, improve code quality, and enhance your web projects.</p>
          </div>
        </div>

        <div class="publication">
          <img src="images/image_small.png" alt="">
          <div class="publication-content">
            <h2>Top 10 JavaScript Libraries to Streamline Your Development</h2>
            <div>
              <i class="fa-regular fa-user"><span>Author Name</span></i>
              <i class="fa-regular fa-calendar"><span>Mar 11, 2019</span></i>
            </div>
            <p>Description: Explore the most popular JavaScript libraries of the year! Learn how these tools can save you time, improve code quality, and enhance your web projects.</p>
          </div>
        </div>

        <div class="publication">
          <img src="images/image_small.png" alt="">
          <div class="publication-content">
            <h2>Top 10 JavaScript Libraries to Streamline Your Development</h2>
            <div>
              <i class="fa-regular fa-user"><span>Author Name</span></i>
              <i class="fa-regular fa-calendar"><span>Mar 11, 2019</span></i>
            </div>
            <p>Description: Explore the most popular JavaScript libraries of the year! Learn how these tools can save you time, improve code quality, and enhance your web projects.</p>
          </div>
        </div>

        <div class="publication">
          <img src="images/image_small.png" alt="">
          <div class="publication-content">
            <h2>Top 10 JavaScript Libraries to Streamline Your Development</h2>
            <div>
              <i class="fa-regular fa-user"><span>Author Name</span></i>
              <i class="fa-regular fa-calendar"><span>Mar 11, 2019</span></i>
            </div>
            <p>Description: Explore the most popular JavaScript libraries of the year! Learn how these tools can save you time, improve code quality, and enhance your web projects.</p>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="search">
          <h3>Search</h3>
          <input type="text" name="search-term" placeholder="Insert Search ward...">
        </div>

        <div class="topics-section">
          <h3>Topics</h3>
          <ul class="topics-list">
            <li class="topics"><a href="#">Poems</a></li>
            <li class="topics"><a href="#">Quotes</a></li>
            <li class="topics"><a href="#">Fiction</a></li>
            <li class="topics"><a href="#">Biography</a></li>
            <li class="topics"><a href="#">Motivation</a></li>
            <li class="topics"><a href="#">Inspiration</a></li>
            <li class="topics"><a href="#">Life Lessons</a></li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h3>My Blog</h3>
        <p>My blog is created to educate the audience on the YouTube platform and to earn additional income for cat food. :)</p>
        <p><i class="fa fa-phone"></i> 123-456-789</p>
        <p><i class="fa fa-envelope"></i> info@myblog.com</p>
        <div class="social-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Events</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Exercises</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Something Else</a></li>
        </ul>
      </div>

      <div class="footer-section-post">
        <h3>Contact Us</h3>
        <form action="#" method="post">
          <input type="email" placeholder="Your email address..." required>
          <textarea placeholder="Your message..." required></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
    </div>

    <div class="footer-bottom-copy-right">
      <p>&copy; myblog.com | Designed by Andrievskii</p>
    </div>
  </footer>

  <script src="scripts/slider.js"></script>
</body>
</html>

