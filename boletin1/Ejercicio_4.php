<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio_4</title>
</head>
<body>
  <!-- Ejercicio 4 -->
  <!-- Calcular la suma, resta, multiplicación, división y módulo de los siguientes números, 10 y 7 -->
  <!-- Creado por Ángel Arias -->
   <?php
      $num1 = 10;
      $num2 = 7;

      $suma = $num1 + $num2;
      $resta = $num1 - $num2;
      $multi = $num1 * $num2;
      $division = $num1 / $num2;
      $modulo = $num1 % $num2;

      echo "la suma de " . $num1 . " + " . $num2 . " es " . $suma . "<br>";
      echo "la resta de " . $num1 . " - " . $num2 . " es " . $resta . "<br>";
      echo "la multiplicacion de " . $num1 . " * " . $num2 . " es " . $multi . "<br>";
      echo "la división de " . $num1 . " / " . $num2 . " es " . $division . "<br>";
      echo "El módulo de " . $num1 . " % " . $num2 . " es " . $modulo . "<br>";
   ?>
</body>
</html>