<?php

$username = "root";
$password = "";
$database = "nipview";

try {
  $pdo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
  //set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("ERROR: Could not connect. " . $e->getMessage());
}
?>