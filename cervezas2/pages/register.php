<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <main class="container">
        <div class="login-form">
            <h1>Registro de Usuario</h1>
            <form action="../actions/register_action.php" method="POST">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" >
                </div>
                <div class="input-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" >
                </div>
                <div class="input-group">
                    <label for="age">Edad:</label>
                    <input type="number" name="age" id="age" >
                </div>
                <div class="input-group">
                    <label for="role">Rol:</label>
                    <select name="role" id="role" >
                        <option value="usuario">Usuario</option>
                        <!-- <option value="admin">Admin</option> -->
                    </select>
                </div>
                <button type="submit">Registrar</button>
            </form>
            <br>
            <a href="../index.php"><button>Volver</button></a>
        </div>
    </main>
</body>
</html>
