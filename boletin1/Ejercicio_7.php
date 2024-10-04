<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio_7</title>
</head>
<body>
  <!-- Ejercicio 7 -->
  <!-- Dadas las siguientes variables.
$valor = "qwert"
$valor = 12345678901234567890
$valor = true;
$valor = 1234;
$valor = NULL;
Pinta en pantalla el tipo de variable -->
  <!-- Creado por Ángel Arias -->
  <?php
    $valor1 = "qwert";
    $valor2 = 12345678901234567890;
    $valor3 = true;
    $valor4 = 1234;
    $valor5 = NULL;

    echo $valor1 . " es " . gettype($valor1) . "<br>";
    echo $valor2 . " es " . gettype($valor2) . "<br>";
    echo $valor3 . " es " . gettype($valor3) . "<br>";
    echo $valor4 . " es " . gettype($valor4) . "<br>";
    echo $valor5 . " es " . gettype($valor5) . "<br>";
  ?>
</body>
</html>