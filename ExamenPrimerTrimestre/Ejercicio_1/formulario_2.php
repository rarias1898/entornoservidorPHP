<?php
session_start();
print "<h1>TABLA DE UNA FILA CON CASILLAS DE VERIFICACIÓN (FORMULARIO 2)</h1>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $numero = isset($_REQUEST['numero']) ? $_REQUEST['numero'] : '';
  if ($numero == '') {
    echo 'No se ha introducido ningún número.';
    print "<br /> <br />";
    print "<a href='index.php'>Volver</a>";
    exit();
  }

  if ($numero <= 0 || $numero > 20) {
    echo 'El número debe ser mayor que 0 y menor o igual que 20.';
    print "<br /> <br />";
    print "<a href='index.php'>Volver</a>";
    exit();
  }

  $_SESSION['numero'] = $numero;

  echo '<form action="formulario_3.php" method="post">';
  echo '<table border="1">';
  echo '<tr>';
  for ($i = 1; $i <= $numero; $i++) {
    echo '<td>';
    echo '<input type="checkbox" name="casilla' . $i . '" id="casilla' . $i . '">';
    echo '</td>';
  }
  echo '</tr>';
  echo '</table>';
  echo '<br>';
  echo '<input type="submit" value="Contar">';
  echo '</form>';

  print "<a href='index.php'>Volver Al formulario</a>";
  exit();
}
?>