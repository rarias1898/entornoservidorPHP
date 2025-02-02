<?php
require_once '../includes/config.php';
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $producto_id = $_GET['id'];

    $sql = "DELETE FROM productos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $producto_id);

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
