<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = intval($_POST['id']);

    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $index => $producto) {
            if ($producto['id'] === $id) {
                unset($_SESSION['carrito'][$index]);
                $_SESSION['carrito'] = array_values($_SESSION['carrito']);
                break;
            }
        }
    }

    header("Location: ../pages/carrito.php");
    exit;
}
?>
