<?php
  $host = "127.0.0.1:3307";
  $user = "root";
  $password = "root";
  $database = "ejercicio_3";

  $connection = new mysqli($host, $user, $password, $database);

  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
?>