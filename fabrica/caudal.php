<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caudal</title>
</head>
<body>
  <?php
    // $radio = $_REQUEST['radio'];
    // $altura = $_REQUEST['altura'];
    // $caudal = $_REQUEST['caudal'];

    if(isset($_REQUEST['radio'])) {
      $radio = $_REQUEST['radio'];
    } else {
      $radio = 0;
    }

    if(isset($_REQUEST['altura'])) {
      $altura = $_REQUEST['altura'];
    } else {
      $altura = 0;
    }

    if(isset($_REQUEST['caudal'])) {
      $caudal = $_REQUEST['caudal'];
    } else {
      $caudal = 0;
    }

    $area = pi() * pow($radio, 2);
    $volumen = $area * $altura;

    $tiempo = $volumen / $caudal;

    echo "Para un volumen de " . round($volumen, 2) . " Tarda " . round($tiempo, 2) . " Minutos";
  ?>
</body>
</html>