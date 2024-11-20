<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = mysqli_real_escape_string($connection, $_POST['dni']);
    $nombre = mysqli_real_escape_string($connection, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($connection, $_POST['apellidos']);
    $usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
    $contraseña = mysqli_real_escape_string($connection, $_POST['password']);

    $comprobar_usuario = "SELECT * FROM usuarios WHERE DNI = '$dni' OR Usuario = '$usuario'";
    $result_comprobar = $connection->query($comprobar_usuario);

    if (!preg_match("/^[0-9]{8}[A-Z]$/", $dni)) {
        echo "El DNI no es correcto";
        print "<br><br><a href='register.php'>Volver</a>";
        exit();
    }

    if ($result_comprobar->num_rows > 0) {
        echo "El usuario ya existe";
        print "<br><br><a href='register.php'>Volver</a>";
        exit();
    }

    $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (DNI, Nombre, Apellidos, Usuario, Contraseña) VALUES ('$dni', '$nombre', '$apellidos', '$usuario', '$contraseña')";
    
    if ($connection->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $connection->error;
    }
    $connection->close();
}
?>
