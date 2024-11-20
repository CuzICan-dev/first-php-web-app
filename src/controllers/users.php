<?php
declare(strict_types=1);

require_once 'database/db.php';

function userAuth(array $user){
  $_SESSION['id'] = $user['id'];
  $_SESSION['login'] = $user['userName'];
  $_SESSION['admin'] = $user['admin'];

  if($_SESSION['admin']){
    header('location: ' . BASE_URL . 'admin/admin.php');
  }
  else{
    header('location: ' . BASE_URL);
  }
}

$errMsg = '';

/* For regisstration page */
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset(($_POST['button-reg']))) {
  $admin = 0;
  $login = trim($_POST['login-name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $passwordRepeat = trim($_POST['password-repeat']);

  if ($login === '' || $email === '' || $password === '') {
    $errMsg = "Not all the fields are filled!";
  }
  elseif (mb_strlen($login, 'UTF8') < 2) {
    $errMsg = 'Login need to be atlist 2 charecters.';
  }
  elseif ($password !== $passwordRepeat) {
    $errMsg = 'The passwords not matching.';
  }
  else {
    $existingUser = selectOne('users', ['email' => $email]);
    if (isset($existingUser['email']) && $existingUser['email'] === $email) {
      $errMsg = 'User allrady exists.';
    }
    else {
      $password = password_hash($_POST['password-repeat'], PASSWORD_DEFAULT);
      $post = [
        'userName' => $login,
        'email' => $email,
        'password' => $password,
        'admin' => $admin
      ];
      $id = insert('users', $post);
      $errMsg = "User" . "<strong> " . $login . " </strong>" . "was secssesfuly registered!";
      $user = selectOne('users', ['id' => $id]);
      
      userAuth($user);
    }
  }

} 
else {
  $login = '';
  $email = '';
}

/* For Login page */
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset(($_POST['button-login']))) {

  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if ($email === ''  || $password === '') {
    $errMsg = "Not all the fields are filled!";
  }
  else {
    $existingUser = selectOne('users', ['email' => $email]);
    if (isset($existingUser['email']) && $existingUser['email'] === $email && 
    password_verify($password, $existingUser['password'])) {

      userAuth($existingUser);
      
    }
    else {
      $errMsg = "User not existing or password not correct!";
    }
  }
  
}
else {
  $email = '';
}