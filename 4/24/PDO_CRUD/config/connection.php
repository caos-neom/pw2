<?php
//configuraçãoda conexão com BD
$host = 'localhost';
$database = 'escola';
$user = 'root';
$password = '';

//do plugin PHP PDO


try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
} catch (PDOException $erro) {
  die("erro de conexão: " . $erro->getMessage());
}

?>