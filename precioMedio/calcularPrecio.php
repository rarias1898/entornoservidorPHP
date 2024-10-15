<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular Precio</title>
</head>
<body>
  <?php
    $precio1 = $_REQUEST['producto1'];
    $precio2 = $_REQUEST['producto2'];
    $precio3 = $_REQUEST['producto3'];

    $media = round(($precio1 + $precio2 + $precio3) / 3, 2);

    echo "El precio medio es " . $media . " Euros";
  ?>
</body>
</html>