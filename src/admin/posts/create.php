<?php

declare(strict_types=1);

require_once '../../path.php';

session_start();
// include_once './database/db.php';

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
  
  <link rel="stylesheet" href="../../styles/root.css">
  <link rel="stylesheet" href="../../styles/header.css">
  <link rel="stylesheet" href="../../styles/footer.css">
  <link rel="stylesheet" href="../../styles/admin-root.css">
  <link rel="stylesheet" href="../../styles/admin-post-form.css">
  <link rel="stylesheet" href="../../styles/admin-nav-bar.css">

  <title>My Blog</title>
</head>
<body>
  <?php include ('../../include/header-admin.php'); ?>

  <main>
    <?php require_once '../../include/sidebar-admin.php'; ?>

    <div class="content-wrapper">
      <div class="control-buttens-wrapper">
        <button class="add-btn">Add Post</button>
        <button class="edit-btn">Manage Posts</button>
      </div>
      <div class="content-menu">
        <h2>Adding Posts</h2>
        <form action="">
          <input type="text" placeholder="Title">

          <label class="post-content-lable" for="post-content">Post Content</label>
          <textarea name="" id="post-content"></textarea>

          <input type="file">

          <select>
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
          </select>

          <button>Save Post</button>
        </form>
      </div>
    </div>
  </main>

  
  <?php include ('../../include/footer.php'); ?>

</body>
</html>

