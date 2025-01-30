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
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <?php include '../includes/header.php' ?>

    <main class="home-container">
        <?php if ($user_role === 'admin'): ?>
            <!-- ZONA ADMIN -->
        <?php elseif ($user_role === ''): ?>
            <!-- ZONA USUARIOS -->
            <!-- <ul>
                <li><a href="#">Mi perfil</a></li>
                <li><a href="#">Mis pedidos</a></li>
                <li><a href="#">Soporte</a></li>
            </ul> -->
        <?php else: ?>
            <!-- SIN ROL -->
            <p>No tienes acceso a esta página.</p>
        <?php endif; ?>
    
        <?php include ('../includes/productos.php'); ?>
    </main>

    <!-- <?php include('../includes/footer.php') ?> -->
</body>
</html>
