<header>
  <nav class="header-nav">
    <a href="<?= BASE_URL ?>">
      <h1 class="logo-link">My blog</h1>
    </a>

    <ul>
      <li><a href="<?= BASE_URL ?>">Main</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Services</a></li>
      <li>
        <?php if(isset($_SESSION['id'])): ?>
          <a href="#">
            <i class="fa-solid fa-user"></i>
            <?php echo $_SESSION['login'] ?>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="#">Admin Panel</a></li>
            <?php endif; ?>
            <li><a href="<?= BASE_URL . 'logout.php'; ?>">Exit</a></li>
          </ul>
        <?php else: ?>
          <a href="<?= BASE_URL . 'login.php'; ?>">
            <i class="fa-solid fa-user"></i>
            Login
          </a>
          <ul>
            <li><a href="<?= BASE_URL . 'registration-page.php'; ?>">Register</a></li>
          </ul>
        <?php endif; ?>
      </li>
    </ul>

  </nav>
</header>