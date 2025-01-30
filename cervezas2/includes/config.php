<?php
  $host = 'localhost:3307';
  $dbname = 'cerveceria';
  $user = 'root';
  $password = '';
  
  $conn = new mysqli($host, $user, $password, $dbname);
  
  if ($conn->connect_error) {
      die("Error al conectar con la base de datos: " . $conn->connect_error);
  }
?>