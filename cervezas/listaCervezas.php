<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Cervezas</title>
</head>
<body>
  <h1>Insercion de Cervezas</h1>
  <?php
    $tipoCerveza = $_REQUEST['tipoCerveza'];
    $tipo = $_REQUEST['tipo'];
    $cantidadNeta = $_REQUEST['cantidadNeta'];
    $marca = $_REQUEST['marca'];
    $advertencia = $_REQUEST['advertencia'];
    $consumoPreferente = $_REQUEST['consumoPreferente'];
    $alergenos = $_REQUEST['aler'];
    $observaciones = $_REQUEST['observaciones'];

    if(!isset($marca) || !isset($advertencia) || !isset($consumoPreferente) || !isset($alergenos)) {
      ?>
      <h3>No se ha podido realizar la inserción debido a los siguentes errores: </h3>
      <ul>
        <li>Se requiere Marca</li>
        <li>Es obligatorio advertencia sobre el consumo de alcohol</li>
        <li>No ha introducido fecha</li>
        <li>Es obligatorio incluir alergenos</li>
      </ul>
      <?php
    } else {
      ?>
        <ul>
          <li>Tipo de Cerveza: <?php echo $tipoCerveza ?></li>
          <li>Tipo Embase: <?php echo $tipo ?> </li>
          <li>Cantidad Neta: <?php echo $cantidadNeta ?></li>
          <li>Marca del producto: <?php echo $marca ?></li>
          <li>Advertencia: <?php echo $advertencia ?></li>
          <li>Fecha de consumo preferente: <?php echo $consumoPreferente ?></li>
          <li>Alergenos: <?php echo $alergenos ?></li>
          <li>Observaciones: <?php echo $observaciones ?></li>
        </ul>
      <?php
    }
  ?>

  

  <a href="index.php">Volver</a>
</body>
</html>