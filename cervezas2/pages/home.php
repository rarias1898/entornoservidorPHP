<?php
session_start();

if (!isset($_SESSION['role']) || !isset($_SESSION['name'])) {
    header("Location: login.php");
    exit;
}

$user_name = htmlspecialchars($_SESSION['name']);
$user_role = $_SESSION['role'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $user_name; ?>!</h1>

    <?php if ($user_role === 'admin'): ?>
        <!-- ZONA ADMIN -->
        <h2>Panel de Administrador</h2>
        <ul>
            <li><a href="#">Gestión de usuarios</a></li>
            <li><a href="#">Reportes</a></li>
            <li><a href="#">Configuraciones</a></li>
        </ul>
    <?php elseif ($user_role === ''): ?>
        <!-- ZONA USUARIOS -->
        <h2>Zona de Usuario</h2>
        <p>Aquí puedes ver tus datos, realizar compras o gestionar tu perfil.</p>
        <ul>
            <li><a href="#">Mi perfil</a></li>
            <li><a href="#">Mis pedidos</a></li>
            <li><a href="#">Soporte</a></li>
        </ul>
    <?php else: ?>
        <!-- SIN ROL -->
        <p>No tienes acceso a esta página.</p>
    <?php endif; ?>

    <a href="../includes/logout.php">Cerrar sesión</a>
</body>
</html>
