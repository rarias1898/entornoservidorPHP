<?php
require_once '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $age = (int)$_POST['age'];
    $role = trim($_POST['role']);

    if (empty($email) || empty($name) || empty($password) || empty($age) || empty($role)) {
        die("Todos los campos son obligatorios.");
    }

    // Verificar si el email ya existe
    $sql = "SELECT id FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        die("El correo ya está registrado.");
    }

    // Cifrar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO usuario (email, name, password, age, role) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssds", $email, $name, $hashed_password, $age, $role);

    if ($stmt->execute()) {
        echo "Usuario registrado con éxito.";
        header("Location: ../pages/login.php");
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método no permitido.";
}
?>
