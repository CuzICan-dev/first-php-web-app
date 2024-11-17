<?php

require_once 'database/db.php';

if(isset($_POST['login-name'])){
  $login = $_POST['login-name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password-repeat'], PASSWORD_DEFAULT);
  $admin = 0;
  
  $post = [
    'userName' => $login,
    'email' => $email,
    'password' => $password,
    'admin' => $admin
  ];

  $id = insert('users', $post);
  
  $lastRow = selectOne('users', ['id' => $id]);
  
  htmlDisplayQueary($lastRow);
}