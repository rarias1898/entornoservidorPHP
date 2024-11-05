<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>curriculum</title>
</head>
<body>
  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_REQUEST["nombre"];
    $apellidos = $_REQUEST["apellidos"];
    $sexo = $_REQUEST["sexo"];
    $correo = $_REQUEST["correo"];
    $telefono = $_REQUEST["telefono"];
    $experiencia = $_REQUEST["experiencia"];
    $estudios = $_REQUEST["estudios"];
    $jornada = $_REQUEST["jornada"];
    $idiomas = $_REQUEST["idiomas"];

    echo "<h1>Curriculum de $nombre $apellidos</h1>";
    echo "<p>Sexo: $sexo</p>";
    echo "<p>Correo electrónico: $correo</p>";
    echo "<p>Número de contacto: $telefono</p>";
    echo "<p>Experiencia laboral: $experiencia</p>";
    echo "<p>Estudios: $estudios</p>";
    echo "<p>Jornada laboral: $jornada</p>";
    echo "<p>Idiomas: " . implode(", ", $idiomas) . "</p>";
  }
  ?>

  <br><br>
  <a href="./Ejercicio_9.php">
    <button>Atras</button>
  </a>
</body>
</html>