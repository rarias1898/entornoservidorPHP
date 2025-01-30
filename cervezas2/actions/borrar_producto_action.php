<?php
require_once '../includes/config.php';
session_start();

// Verificar que el usuario tiene permisos de administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php"); // Redirigir si no es admin
    exit;
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $producto_id = $_GET['id'];

    // Eliminar el producto de la base de datos
    $sql = "DELETE FROM productos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $producto_id);

    // Ejecutar la consulta y verificar si se eliminó el producto
    if ($stmt->execute()) {
        header("Location: ../pages/home.php");
        exit;
    } else {
        echo "Error al eliminar el producto: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID de producto no válido.";
}

$conn->close();
?>
