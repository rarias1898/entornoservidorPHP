<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2>Registro nuevo usuario</h2>
    <form action="register_process.php" method="post">
        <label for="dni">DNI</label>
        <input type="text" name="dni" required>
        <br><br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required>
        <br><br>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" required>
        <br><br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
