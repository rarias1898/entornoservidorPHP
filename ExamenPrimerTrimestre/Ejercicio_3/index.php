<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <h1>REGISTRO DE USUARIOS - IDENTIFICACIÓN 1</h1>
    <form action="login.php" method="post">
      <label for="usuario">Nombre</label>
      <input type="text" name="usuario" id="usuario" required>
      <br>
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" required>
      <br><br>
      <input type="submit" value="Iniciar Sesión"/>
    </form>
    <br><br>
    <p><strong>Nota:</strong> El usuario Administrador se llama root y su contraseña es también root.</p>
  </body>
</html>