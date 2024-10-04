<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio_5</title>
</head>
<body>
  <!-- Ejercicio 5 -->
  <!-- Dado el numero 8, calcular y presentar en pantalla:
 Suma 2
 Resta 2
 Multiplica por 5 el ultimo valor
 Divide por 3 el último valor
 Incrementa en 1 el resultado
 Decrementa el resultado en 1 -->
  <!-- Creado por Ángel Arias -->
   <?php
    $num = 8;

    $suma = $num + 2;
    $resta = $suma - 2;
    $multi = $resta * 5;
    $division = $multi / 3;
    $increment = $division++;
    $decrement = $increment--;

    echo $decrement;
   ?>
</body>
</html>