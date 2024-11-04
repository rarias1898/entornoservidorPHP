<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 9 | Validar</title>
</head>
<body>
  <?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];

    if (filter_var($nombre, FILTER_VALIDATE_INT)) {
      echo "El nombre no puede contener números";
    } else if ($edad < 3 || $edad > 130) {
      echo "La edad debe estar comprendida entre 3 y 130 años";
    } else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      echo "El correo no tiene un formato válido";
    } else {
      echo "Datos correctos";
    }
    
  ?>
  <br><br>
  <a href="./Ejercicio_9.php">
    <button>Atras</button>
  </a>
</body>
</html>