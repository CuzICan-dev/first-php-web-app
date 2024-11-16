<?php

declare(strict_types=1);

// the credentials need to be in seperate file that would be ignored in git commits
$driver = 'mysql';
$host = 'localhost';
$db_name = 'fisrt-php-website';
$db_user = 'root';
$db_password = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]; 

try{
  $pdo = new PDO(
    "$driver:host=$host;dbname=$db_name;charset=$charset", 
    $db_user, $db_password, $options
  );
}
catch (PDOException $i){
  die("error in connection to date base");
}