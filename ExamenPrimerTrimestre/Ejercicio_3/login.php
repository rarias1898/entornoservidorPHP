<?php
// Incluimos el archivo de configuración donde está la conexión a la base de datos
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
    $contraseña = mysqli_real_escape_string($connection, $_POST['password']);

    // Consulta para buscar el usuario en la base de datos
    $query = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";
    $result = $connection->query($query);

    // Si el usuario existe, redirigimos a la página de inicio, si no, a la de registro
    if ($result->num_rows > 0) {
        header("Location: home.php");
    } else {
        header("Location: register.php");
    }
    $connection->close();
}
?>
