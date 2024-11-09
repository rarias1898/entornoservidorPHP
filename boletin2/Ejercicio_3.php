<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
</head>
<body>
  <h1>Introduzca su edad</h1>
  <form action="">
    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad">
    <input type="submit" value="Enviar">
  </form>

  <?php
    $edad = $_REQUEST['edad'];

    if ($edad < 19) {
      echo "Tienes el acceso prohibido";
    }else if ($edad > 65) {
      echo "El contenido no es para jubilados";
    }else {
      header("Location: http://www.srcodigofuente.es/adultos-no-jubilados");
      exit();
    }
  ?>
</body>
</html>