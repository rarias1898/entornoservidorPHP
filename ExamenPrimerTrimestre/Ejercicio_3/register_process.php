<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = mysqli_real_escape_string($connection, $_POST['dni']);
    $nombre = mysqli_real_escape_string($connection, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($connection, $_POST['apellidos']);
    $usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
    $contraseña = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "INSERT INTO usuarios (DNI, Nombre, Apellidos, Usuario, Contraseña) VALUES ('$dni', '$nombre', '$apellidos', '$usuario', '$contraseña')";
    
    if ($connection->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
    $connection->close();
}
?>
