<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>

<body>
  <!-- Ejercicio 2 -->
  <!-- Aplicación para calcular el área del circulo y la circunferencia de un círculo de radio 4 -->
  <!-- Creado por Ángel Arias -->
  <?php
    $radio = 4;

    $area = pi() * pow($radio, 2);
    $circunferencia = 2 * pi() * $radio;

    echo "El área del círculo es: " . number_format($area, 2) . "<br>";
    echo "La circunferencia del círculo es: " . number_format($circunferencia, 2);
  ?>
</body>

</html>