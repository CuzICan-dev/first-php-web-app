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

function select(string $table, array $params = [], bool $single = false): array {

  validateTable($table); // Validate the table
  global $pdo;

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
function selectAll(string $table, array $params = []): array {
  return select($table, $params, false);
}

/**
* Fetch the first row in a table.
*/
function selectOne(string $table, array $params = []): array {
  return select($table, $params, true);
}

/**
* insert to table
*/
function insert(string $table, array $params){
  // $sql = "INSERT INTO $table (admin, userName, email, password) VALUES (:adm, :user, :mail, :pass)";

  validateTable($table); // Validate the table
  global $pdo;

  // Generate column names and placeholders
  $columns = implode(', ', array_keys($params));
  $placeholders = ':' . implode(', :', array_keys($params));

  // Construct the SQL query
  $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

  $query = $pdo->prepare($sql);
  $query->execute($params);
  dbCheckError($query);
  return $pdo->lastInsertId();
}

/**
* update row in table
*/
function update(string $table, int $id, array $params){
  // $sql = "UPDATE `users` SET `userName` = 'test' WHERE `id` = 14"

  validateTable($table); // Validate the table
  global $pdo;

  $str = '';
  $conditions = [];
  foreach ($params as $key => $value) {
      $conditions[] = "$key = :$key"; // Use named placeholders
  }
  $str = implode(', ', $conditions);
  
  // Construct the SQL query
  $sql = "UPDATE $table SET $str WHERE id = $id";

  $query = $pdo->prepare($sql);
  $query->execute($params);
  dbCheckError($query);
}

/**
* delete row in table
*/
function deleteRow(string $table, int $id){
  // $sql = "DELETE FROM `users` WHERE `id` = 14"

  validateTable($table); // Validate the table
  global $pdo;

  // Construct the SQL query
  $sql = "DELETE FROM $table WHERE id = :id";

  $query = $pdo->prepare($sql);
  $query->execute(['id' => $id]);
  dbCheckError($query);
}