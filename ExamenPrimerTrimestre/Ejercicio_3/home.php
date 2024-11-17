<?php
include 'config.php';
include 'helpers.php';

$usuario = $_REQUEST['usuario'];
$password = $_REQUEST['password'];

// Verificar si el usuario existe
$result = mysqli_query($connection, "SELECT password FROM usuarios WHERE nombre = '$usuario'");
$user = mysqli_fetch_assoc($result);

if ($user) {
    // Usuario encontrado, verificar contraseña
    if (password_verify($password, $user['password'])) {
        echo "Bienvenido, $usuario!";
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    // Usuario no encontrado, crear uno nuevo
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($connection, "INSERT INTO usuarios (dni, usuario, password) VALUES ('$dni', '$usuario', '$hashed_password')");
    echo "Usuario creado exitosamente. Bienvenido, $usuario!";
}

mysqli_close($connection);
echo "<br><a href='index.php'>Cerrar Sesion</a>";
?>
