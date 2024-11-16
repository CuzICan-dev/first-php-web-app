<?php
declare(strict_types=1);

require_once 'connect.php';

// Define allowed tables as a constant
define('ALLOWED_TABLES', ['users']);

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

function validateTable(string $table): void {
  if (!in_array($table, ALLOWED_TABLES)) {
      throw new InvalidArgumentException("Invalid table name provided.");
  }
}

function select(PDO $pdo, string $table, array $params = [], bool $single = false): array {

  validateTable($table); // Validate the table

  // Base query
  $sql = "SELECT * FROM $table";

  // Add WHERE clause if parameters are provided
  if (!empty($params)) {
      $conditions = [];
      foreach ($params as $key => $value) {
          $conditions[] = "$key = :$key"; // Use named placeholders
      }
      $sql .= " WHERE " . implode(' AND ', $conditions);
  }

  // Add LIMIT 1 if fetching a single row
  if ($single) {
      $sql .= " LIMIT 1";
  }

  // Prepare and execute the query
  $query = $pdo->prepare($sql);
  $query->execute($params); // Bind parameters securely
  dbCheckError($query);

  // Fetch results
  if ($single) {
      return $query->fetch() ?: []; // Fetch single row or empty array if none
  }

  return $query->fetchAll(); // Fetch all rows
}

/**
* Fetch all rows in a table.
*/
function selectAll(PDO $pdo, string $table, array $params = []): array {
  return select($pdo, $table, $params, false);
}

/**
* Fetch the first row in a table.
*/
function selectOne(PDO $pdo, string $table, array $params = []): array {
  return select($pdo, $table, $params, true);
}

function insert(PDO $pdo, string $table, array $params){
  // $sql = "INSERT INTO $table (admin, userName, email, password) VALUES (:adm, :user, :mail, :pass)";

  validateTable($table); // Validate the table

  // Generate column names and placeholders
  $columns = implode(', ', array_keys($params));
  $placeholders = ':' . implode(', :', array_keys($params));

  // Construct the SQL query
  $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

  $query = $pdo->prepare($sql);
  $query->execute($params);
  dbCheckError($query);
}

$arrData = [
  'admin' => '1', 
  'userName' => 'Rumbusa', 
  'email' => 'Rumbusa@test.com', 
  'password' => '5566'
];

$params = [
  'admin' => 1
];

// insert($pdo, 'users', $arrData);

// htmlDisplayQueary(selectAll($pdo, 'users', $params));