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
  <link rel="stylesheet" href="../../styles/admin-nav-bar.css">
  <link rel="stylesheet" href="../../styles/admin-post-table.css">

  <title>My Blog</title>
</head>
<body>
  <?php include ('../../include/header-admin.php'); ?>

  <main>
    <nav class="content-nav-bar">
      <ul class="category-list">
        <li class="category-list-item"><a href="#">Posts</a></li>
        <li class="category-list-item"><a href="#">Users</a></li>
        <li class="category-list-item"><a href="#">Comments</a></li>
      </ul>
    </nav>

    <div class="content-wrapper">
      <div class="control-buttens-wrapper">
        <button class="add-btn">Create</button>
        <button class="edit-btn">Manage Users</button>
      </div>
      <div class="content-menu">
        <h2>Meneging Users</h2>
        <table class="content-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Login Name</th>
              <th>Role</th>
              <th>Control</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Roman</td>
              <td>Admin</td>
              <td class="table-buttons">
                <a class="edit-btn" href="#">Edit</a>
                <a class="delete-btn" href="#">Delite</a>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Nikita</td>
              <td>User</td>
              <td class="table-buttons">
                <a class="edit-btn" href="#">Edit</a>
                <a class="delete-btn" href="#">Delite</a>
              </td>
            </tr>

            <tr>
              <td>3</td>
              <td>Alex</td>
              <td>Admin</td>
              <td class="table-buttons">
                <a class="edit-btn" href="#">Edit</a>
                <a class="delete-btn" href="#">Delite</a>
              </td>
            </tr>

            <tr>
              <td>4</td>
              <td>Heargi</td>
              <td>User</td>
              <td class="table-buttons">
                <a class="edit-btn" href="#">Edit</a>
                <a class="delete-btn" href="#">Delite</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  
  <?php include ('../../include/footer.php'); ?>

</body>
</html>

