<?php
declare(strict_types=1);

require_once 'connect.php';

function htmlDisplayQueary(mixed $value){
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}

// validate if error acured in queary
function dbCheckError(PDOStatement $query){
  $erroInfo = $query->errorInfo();

  if($erroInfo[0] !== PDO::ERR_NONE){
    echo $erroInfo[2];
    exit();
  }

  return true;
}

// fetch all rows in selected table
function selectAll(PDO $pdo, string $table, array $params = []): array{
 
  $sql = "SELECT * FROM $table";

  if(!empty($params)){
    $i = 0;
    foreach($params as $key => $value){
      if(!is_numeric($value)){
        $value = "'" . $value . "'";
      }
      if($i === 0){
        $sql .= " WHERE $key = $value";
      }
      else{
        $sql .= " AND $key = $value";
      }
      $i++;
    }
  }
  
  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);
  
  return $query->fetchAll();
}

// fetch first rows in selected table
function selectOne(PDO $pdo, string $table, array $params = []): array{
 
  $sql = "SELECT * FROM $table";

  if(!empty($params)){
    $i = 0;
    foreach($params as $key => $value){
      if(!is_numeric($value)){
        $value = "'" . $value . "'";
      }
      if($i === 0){
        $sql .= " WHERE $key = $value";
      }
      else{
        $sql .= " AND $key = $value";
      }
      $i++;
    }
  }

  // $sql .= " LIMIT 1 ";  
  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);
  
  return $query->fetch();
}

$params = [
  'admin' => 1,
  'userName' => 'Roman'
];


// htmlDisplayQueary(selectAll($pdo, 'users', $params));
htmlDisplayQueary(selectOne($pdo, 'users'));