<?php
// Incluyo el archivo de configuración donde se encuentra la conexión a la base de datos
require 'config.php';

// Realizo la consulta para obtener todos los usuarios
$sql = "SELECT id, DNI, Nombre, Apellidos FROM usuarios";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['DNI']}</td>
                <td>{$row['Nombre']}</td>
                <td>{$row['Apellidos']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No se encontraron usuarios.</p>";
}

$connection->close();
?>
