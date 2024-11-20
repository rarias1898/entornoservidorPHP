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
    <h1>Bienvenido a la página principal</h1>
    <p>Has iniciado sesión correctamente.</p>

    <form action="home.php" method="post">
        <button type="submit" name="mostrar_usuarios">Mostrar Usuarios</button>
    </form>

    <form action="index.php" method="post">
        <button type="submit" name="cerrar_sesion">Cerrar Sesión</button>
    </form>
        
    <?php
        if (isset($_POST['mostrar_usuarios'])) {
            include 'listar_usuarios.php';
        }
    ?>
</body>
</html>
