<?php
require_once 'config.php';

// Consultar todos productos
$sql = "SELECT * FROM productos ORDER BY id DESC";
$result = $conn->query($sql);
?>

<h2>Lista de Productos</h2>
<div class="productos-container">
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="producto-card">
            <div class="producto-imagen">
                <?php if (!empty($row['imagen'])): ?>
                    <img src="<?php echo htmlspecialchars($row['imagen']); ?>" alt="Imagen del producto">
                <?php else: ?>
                    <img src="../images/default.png" alt="Imagen no disponible">
                <?php endif; ?>
            </div>
            <div class="producto-info">
                <h3><?php echo htmlspecialchars($row['denominacion']); ?></h3>
                <p><strong>Marca:</strong> <?php echo htmlspecialchars($row['marca']); ?></p>
                <p><strong>Tipo:</strong> <?php echo htmlspecialchars($row['tipo']); ?></p>
                <p><strong>Formato:</strong> <?php echo htmlspecialchars($row['formato']); ?></p>
                <p><strong>Tamaño:</strong> <?php echo htmlspecialchars($row['tamaño']); ?></p>
                <p><strong>Alérgenos:</strong> <?php echo htmlspecialchars($row['alergenos']); ?></p>
                <p><strong>Fecha de consumo:</strong> <?php echo htmlspecialchars($row['fecha_consumo']); ?></p>
                <p><strong>Precio:</strong> <?php echo number_format($row['precio'], 2); ?> €</p>
                <p><strong>Observaciones:</strong> <?php echo htmlspecialchars($row['observaciones']); ?></p>
                <div class="admin-control">
                    <?php if ($user_role === 'admin'): ?>
                        <a href="../actions/borrar_producto_action.php?id=<?php echo $row['id']; ?>">Borrar</a>
                        <a href="../pages/editar_producto.php?id=<?php echo $row['id']; ?>">Editar</a>
                    <?php endif ?>
                    
                    <?php if ($user_role === ''): ?>
                    <form method="POST" action="../actions/agregar_al_carrito_action.php">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="denominacion" value="<?php echo $row['denominacion']; ?>">
                        <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                        <button type="submit">Añadir al carrito</button>
                    </form>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php
$conn->close();
?>
