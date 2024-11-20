<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Página principal de la aplicación -->
    <h1>Bienvenido a la página principal</h1>
    <p>Has iniciado sesión correctamente.</p>

    <!-- Botón para listar los usuarios de la base de datos -->
    <form action="home.php" method="post">
        <button type="submit" name="mostrar_usuarios">Mostrar Usuarios</button>
    </form>

    <!-- Boton para cerrar sesión, redirección al login -->
    <form action="index.php" method="post">
        <button type="submit" name="cerrar_sesion">Cerrar Sesión</button>
    </form>
        
    <?php
        if (isset($_POST['mostrar_usuarios'])) {
            // Aquí llamo al archivo donde esta la query para listar los usuarios
            include 'listar_usuarios.php';
        }
    ?>
</body>
</html>
