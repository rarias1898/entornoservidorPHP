<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 9</title>
</head>
<body>
  <!-- Realizar un aplicación que solicite el nombre, la edad y el correo electrónico.
Tendrás que validar los campos recibidos de la siguiente forma:
1.- El nombre no tiene que tener números
2.- La edad debe estar comprendida entre 3 y 130 años
3.-Validar el formato del correo -->

  <form action="validar.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required>
    <br>
    <label for="correo">Correo:</label>
    <input type="email" name="correo" id="correo" required>
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>