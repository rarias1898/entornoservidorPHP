<?php
require_once '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = intval($_POST['id']);
    $denominacion = trim($_POST['denominacion']);
    $marca = trim($_POST['marca']);
    $tipo = trim($_POST['tipo']);
    $formato = trim($_POST['formato']);
    $tamano = trim($_POST['tamano']);
    $precio = floatval($_POST['precio']);

    $sql = "UPDATE productos SET 
                denominacion = ?, 
                marca = ?, 
                tipo = ?, 
                formato = ?, 
                tamaño = ?, 
                precio = ? 
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssddi", $denominacion, $marca, $tipo, $formato, $tamano, $precio, $id);

    if ($stmt->execute()) {
        header("Location: ../pages/home.php");
        exit;
    } else {
        echo "Error al actualizar el producto.";
    }
} else {
    echo "Método no permitido.";
}
?>
