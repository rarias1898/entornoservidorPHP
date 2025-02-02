<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
  <?php include '../includes/header.php' ?>
  <main class="container">
    <div class="carrito">
      <h2>Carrito de Compras</h2>
      
      <?php if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])): ?>
          <p>El carrito está vacío.</p>
      <?php else: ?>
          <table>
              <thead>
                  <tr>
                      <th>Producto</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Total</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                  $total = 0;
                  foreach ($_SESSION['carrito'] as $index => $producto): 
                      $subtotal = $producto['precio'] * $producto['cantidad'];
                      $total += $subtotal;
                  ?>
                      <tr>
                          <td><?php echo htmlspecialchars($producto['denominacion']); ?></td>
                          <td><?php echo number_format($producto['precio'], 2); ?> €</td>
                          <td><?php echo $producto['cantidad']; ?></td>
                          <td><?php echo number_format($subtotal, 2); ?> €</td>
                          <td>
                              <form action="../actions/eliminar_del_carrito_action.php" method="POST">
                                  <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                                  <button type="submit">Eliminar</button>
                              </form>
                          </td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      
          <p><strong>Total: <?php echo number_format($total, 2); ?> €</strong></p>
      
          <form action="../actions/vaciar_carrito_action.php" method="POST">
              <button type="submit">Vaciar Carrito</button>
          </form>
      
      <?php endif; ?>
    </div>
  </main>
  <?php include '../includes/footer.php' ?>
</body>
</html>
