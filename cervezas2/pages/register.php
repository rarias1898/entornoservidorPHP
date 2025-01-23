<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="../actions/register_action.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" >
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" >
        <br>
        <label for="age">Edad:</label>
        <input type="number" name="age" id="age" >
        <br>
        <label for="role">Rol:</label>
        <select name="role" id="role" >
            <option value="usuario">Usuario Normal</option>
            <option value="admin">Admin</option>
        </select>
        <br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
