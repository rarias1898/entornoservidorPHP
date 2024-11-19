<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
    $contraseña = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        header("Location: home.php");
    } else {
        header("Location: register.php");
    }
    $connection->close();
}
?>
