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

 
  <main>
    <h2 class="main-title">Last Publications Last Publications Last Publications Last Publications Last Publications Last Publications Last Publications Last Publications
      Last Publications Last Publications Last Publications Last Publications Last Publications Last Publications Last Publications
    </h2>
    <div class="main-grid">
      <div class="publications">

        <div class="single-publication">
          <img class="img-big" src="images/image_1.png" alt="">
          <div class="single-publication-content">
            <div class="publication-author">
              <i class="fa-regular fa-user"><span>Author Name</span></i>
              <i class="fa-regular fa-calendar"><span>Mar 11, 2019</span></i>
            </div>
            <h2>Top 10 JavaScript Libraries to Streamline Your Development</h2>
            <p><strong>The Ultimate Guide to Web Development</strong></p>
            <p>Published on November 14, 2024 by Roman Andrievskii</p>
          
            <p>Web development is a fast-evolving field that combines creativity, logic, and technology to create websites and applications. Whether you're a beginner or an experienced developer, staying up-to-date with the latest trends and best practices is essential. In this guide, we’ll cover the basics, introduce advanced topics, and provide resources for learning more.</p>
          
            <p><strong>Understanding the Basics of Web Development</strong></p>
            <p>Before diving into complex topics, it's important to understand the foundations of web development. At a high level, web development involves three main components:</p>
            <p><strong>HTML</strong> is the markup language used to structure web pages.</p>
            <p><strong>CSS</strong> is the style sheet language that controls the appearance of web pages.</p>
            <p><strong>JavaScript</strong> is the programming language that adds interactivity to web pages.</p>
            <p>Mastering these three languages will give you a strong foundation and enable you to create functional and visually appealing websites.</p>
          
            <p><strong>Frontend vs. Backend Development</strong></p>
            <p>Web development is typically divided into two main areas: frontend and backend. Each area has its own set of technologies and responsibilities.</p>
          
            <p><strong>Frontend Development</strong></p>
            <p>Frontend development is all about creating the user interface and ensuring that the website looks good and is easy to use. Technologies like HTML, CSS, and JavaScript are essential here. Frameworks like React, Vue, and Angular can also help streamline development and improve performance.</p>
          
            <p><strong>Backend Development</strong></p>
            <p>Backend development, on the other hand, deals with the server, database, and application logic. Common backend languages include PHP, Python, Ruby, and Node.js. These languages allow developers to create secure and efficient server-side applications that support the frontend experience.</p>
          
            <p><strong>Conclusion</strong></p>
            <p>Web development is a rewarding field that offers endless learning opportunities. By mastering the basics, exploring frontend and backend technologies, and staying up-to-date with trends, you can build a successful career or create amazing projects. Whether you’re aiming to become a professional developer or just want to make your own website, remember that practice, patience, and persistence are key.</p>
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

