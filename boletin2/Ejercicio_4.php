<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>
<body>
  <form action="">
    <label for="horas">Horas de vuelo</label>
    <input type="number" name="horas" id="horas">

    <input type="submit" value="Enviar">
  </form>

  <?php
    $horasTotales = $_REQUEST['horas'];
    $maxHoras = 200;
    $horasVuelo = $maxHoras - $horasTotales;

    if ($horasTotales >= 200) {
      echo "ya llevas las horas suficientes.";
    }else {
      echo "Llevas ". $horasTotales ." horas de vuelo, necesitas ". $horasVuelo ." más para llegar a las ". $maxHoras ." horas necesarias.";
    }
  ?>
</body>
</html>