<?php
require_once '../includes/config.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID de producto no proporcionado.";
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM productos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Producto no encontrado.";
    exit;
}

$producto = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>

<main class="container">
    <div class="producto-form">
        <h2>Editar Producto</h2>
        <form action="../actions/editar_producto_action.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
    
            <div class="input-group">
                <label for="denominacion">Denominación:</label>
                <input type="text" id="denominacion" name="denominacion" value="<?php echo htmlspecialchars($producto['denominacion']); ?>" required>    
            </div>
    
            <div class="input-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" value="<?php echo htmlspecialchars($producto['marca']); ?>" required>
            </div>
    
            <div class="input-group">
                <label for="tipo">Tipo:</label>
                <input type="text" id="tipo" name="tipo" value="<?php echo htmlspecialchars($producto['tipo']); ?>" required>
            </div>
    
            <div class="input-group">
                <label for="formato">Formato:</label>
                <input type="text" id="formato" name="formato" value="<?php echo htmlspecialchars($producto['formato']); ?>">
            </div>
    
            <div class="input-group">
                <label for="tamano">Tamaño:</label>
                <input type="text" id="tamano" name="tamano" value="<?php echo htmlspecialchars($producto['tamaño']); ?>">
            </div>
    
            <div class="input-group">
                <label for="precio">Precio (€):</label>
                <input type="number" id="precio" name="precio" value="<?php echo htmlspecialchars($producto['precio']); ?>" step="0.01" required>
            </div>
    
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</main>

</body>
</html>
