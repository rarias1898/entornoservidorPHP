<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saluda</title>
</head>
<body>
  <?php
  $saluda = $_REQUEST["nombre"];
  echo "Buenos días " . $saluda;
  ?>
  
</body>
</html>