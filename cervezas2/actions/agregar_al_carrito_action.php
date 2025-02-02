<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = intval($_POST['id']);
    $denominacion = $_POST['denominacion'];
    $precio = floatval($_POST['precio']);

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $encontrado = false;
    foreach ($_SESSION['carrito'] as &$producto) {
        if ($producto['id'] === $id) {
            $producto['cantidad'] += 1;
            $encontrado = true;
            break;
        }
    }

    if (!$encontrado) {
        $_SESSION['carrito'][] = [
            "id" => $id,
            "denominacion" => $denominacion,
            "precio" => $precio,
            "cantidad" => 1
        ];
    }

    header("Location: ../pages/carrito.php");
    exit;
}
?>
