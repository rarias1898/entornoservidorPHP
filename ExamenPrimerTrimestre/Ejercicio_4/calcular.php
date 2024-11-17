<?php
  $peso = $_REQUEST['peso'];
  $altura = $_REQUEST['altura'];

  if ($peso <= 0 || $altura <= 0) {
    echo "Intruduzca valores mayores a 0";
    return;
  }

  $imc = round($peso / pow($altura / 100, 2), 0);

  echo "Su índice de masa corporal es de $imc";
  echo "<br> <br>";
  echo "<a href='index.php'>Volver al formulario</a>";
?>