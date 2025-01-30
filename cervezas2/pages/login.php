<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <main class="container">
        <div class="login-form">
            <h1>Iniciar Sesión</h1>
            <form action="../actions/login_action.php" method="POST">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Iniciar Sesión</button>
                <a href="../index.php">Volver</a>
            </form>
        </div>
    </main>
</body>
</html>
