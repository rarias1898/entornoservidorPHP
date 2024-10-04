<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio_6</title>
</head>
<body>
  <!-- Ejercicio 6 -->
  <!-- Dadas las siguientes variables.
$cadena = "Harry";
$entero = 123456789012345678;
$variable = NULL;
Pinta en pantalla el tipo de variable -->
<!-- Creado por Ángel Arias -->
  <?php
    $cadena = "Harry";
    $entero = 123456789012345678;
    $variable = NULL;

    echo $cadena . " es " . gettype($cadena) . "<br>";
    echo $entero . " es " . gettype($entero) . "<br>";
    echo $variable . " es " . gettype($variable);
  ?>
</body>
</html>