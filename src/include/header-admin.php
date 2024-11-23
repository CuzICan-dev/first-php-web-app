<header>
  <nav class="header-nav">
    <a href="<?= BASE_URL ?>">
      <h1 class="logo-link">My blog</h1>
    </a>

    <ul>
      <li>
        <a href="#">
          <i class="fa-solid fa-user"></i>
          <?php echo $_SESSION['login'] ?>
        </a>
      </li>
      <li>
        <a href="<?= BASE_URL . 'logout.php'; ?>">Exit</a>
      </li>
    </ul>

  </nav>
</header>