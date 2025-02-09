<?php
require_once '../includes/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Productos</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>

<div class="login-form">
  <h2>Buscar Productos</h2>
  <form method="GET" action="buscar.php">
      <input type="text" name="denominacion" placeholder="Denominación" value="<?php echo isset($_GET['denominacion']) ? htmlspecialchars($_GET['denominacion']) : ''; ?>">
      
      <input type="text" name="marca" placeholder="Marca" value="<?php echo isset($_GET['marca']) ? htmlspecialchars($_GET['marca']) : ''; ?>">
      
      <input type="text" name="alergenos" placeholder="Alérgenos" value="<?php echo isset($_GET['alergenos']) ? htmlspecialchars($_GET['alergenos']) : ''; ?>">
      
      <input type="text" name="formato" placeholder="Formato" value="<?php echo isset($_GET['formato']) ? htmlspecialchars($_GET['formato']) : ''; ?>">
      
      <input type="text" name="tamano" placeholder="Tamaño" value="<?php echo isset($_GET['tamano']) ? htmlspecialchars($_GET['tamano']) : ''; ?>">
  
      <button type="submit">Buscar</button>
  </form>
  <br>
  <a href="../pages/home.php"><button>Volver</button></a>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "SELECT * FROM productos WHERE 1=1";
    $params = [];
    $types = "";

    if (!empty($_GET['denominacion'])) {
        $sql .= " AND denominacion LIKE ?";
        $params[] = "%" . $_GET['denominacion'] . "%";
        $types .= "s";
    }

    if (!empty($_GET['marca'])) {
        $sql .= " AND marca LIKE ?";
        $params[] = "%" . $_GET['marca'] . "%";
        $types .= "s";
    }

    if (!empty($_GET['alergenos'])) {
        $sql .= " AND alergenos LIKE ?";
        $params[] = "%" . $_GET['alergenos'] . "%";
        $types .= "s";
    }

    if (!empty($_GET['formato'])) {
        $sql .= " AND formato LIKE ?";
        $params[] = "%" . $_GET['formato'] . "%";
        $types .= "s";
    }

    if (!empty($_GET['tamano'])) {
        $sql .= " AND tamaño LIKE ?";
        $params[] = "%" . $_GET['tamano'] . "%";
        $types .= "s";
    }

    $stmt = $conn->prepare($sql);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    ?>
    
    <?php if ($result->num_rows > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Denominación</th>
                    <th>Marca</th>
                    <th>Formato</th>
                    <th>Tamaño</th>
                    <th>Alérgenos</th>
                    <th>Precio (€)</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['denominacion']); ?></td>
                        <td><?php echo htmlspecialchars($row['marca']); ?></td>
                        <td><?php echo htmlspecialchars($row['formato']); ?></td>
                        <td><?php echo htmlspecialchars($row['tamaño']); ?></td>
                        <td><?php echo htmlspecialchars($row['alergenos']); ?></td>
                        <td><?php echo number_format($row['precio'], 2); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No se encontraron productos con esos criterios.</p>
    <?php endif; ?>

    <?php
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>
