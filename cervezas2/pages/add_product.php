<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <main class="container">
        <div class="producto-form">
            <h2>Añadir Nuevo Producto</h2>
            <form action="../actions/procesar_producto_action.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="denominacion">Denominación:</label>
                    <input type="text" id="denominacion" name="denominacion" required>    
                </div>
                <div class="input-group">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" required>
                </div>
                <div class="input-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" id="tipo" name="tipo" required>
                </div>
                <div class="input-group">
                    <label for="formato">Formato:</label>
                    <input type="text" id="formato" name="formato">
                </div>
                <div class="input-group">
                    <label for="tamano">Tamaño:</label>
                    <input type="text" id="tamano" name="tamano">
                </div>
                <div class="input-group">
                    <label for="alergenos">Alérgenos:</label>
                    <input type="text" id="alergenos" name="alergenos">
                </div>
                <div class="input-group">
                    <label for="fecha_consumo">Fecha de Consumo:</label>
                    <input type="date" id="fecha_consumo" name="fecha_consumo">
                </div>
                <div class="input-group">
                    <label for="precio">Precio:</label>
                    <input type="number" id="precio" name="precio" step="0.01" required>
                </div>
                <div class="input-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*">
                </div>
                <div class="input-group">
                    <label for="observaciones">Observaciones:</label>
                    <textarea id="observaciones" name="observaciones"></textarea>
                </div>
                <button type="submit">Añadir Producto</button>
                <a href="./home.php">Volver</a>
            </form>
        </div>
    </main>
</body>
</html>
