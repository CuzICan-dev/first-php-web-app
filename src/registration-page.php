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

  <main class="form-wrapper">
    <form action="#">
      <h2>Register Your Account</h2>
      <div class="input-wrapper">
        <label for="login-name-input">Login Name</label>
        <input id="login-name-input" type="text" placeholder="enter your login name">
      </div>
      <div class="input-wrapper">
        <label for="email-input">Email</label>
        <input id="email-input" type="text" placeholder="enter your Email">
        <span class="abbreviation">Your mail wont be used for spam</span>
      </div>
      <div class="input-wrapper">
        <label for="password-input">Password</label>
        <input id="password-input" type="password" placeholder="enter your Password">
      </div>
      <div class="input-wrapper">
        <label for="password-repeat-input">Repeat Password</label>
        <input id="password-repeat-input" type="password" placeholder="enter your Password again">
      </div>
      <div class="buttens-holder">
        <button class="submit-btn">Register</button>
        <a class="login-link" href="#">Log-in</a>
      </div>
    </form>
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
</body>
</html>