<?php
session_start();

//  Sesión de la agenda
if (!isset($_SESSION['agenda'])) {
    $_SESSION['agenda'] = [];
}

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim(isset($_POST['nombre']) ? $_POST['nombre'] : '');
    $telefono = trim(isset($_POST['telefono']) ? $_POST['telefono'] : '');

    if (empty($nombre)) {
        $mensaje = "El nombre no puede estar vacío.";
    } else {
        if (isset($_SESSION['agenda'][$nombre])) {
            if (empty($telefono)) {
                unset($_SESSION['agenda'][$nombre]);
                $mensaje = "La entrada con el nombre '$nombre' ha sido eliminada.";
            } else {
                $_SESSION['agenda'][$nombre] = $telefono;
                $mensaje = "El número de teléfono de '$nombre' ha sido actualizado.";
            }
        } else {
            if (empty($telefono)) {
                $mensaje = "Debe proporcionar un número de teléfono para agregar un nuevo contacto.";
            } else {
                $_SESSION['agenda'][$nombre] = $telefono;
                $mensaje = "El contacto '$nombre' ha sido añadido a la agenda.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listín telefónico</title>
</head>
<body>
    <h1>Listín telefónico</h1>

    <!-- Mostrar contenido de la agenda en una tabla -->
    <?php 
    if (!empty($_SESSION['agenda'])) {
        echo '<table>';
        echo '<thead><tr><th>Nombre</th><th>Teléfono</th></tr></thead>';
        echo '<tbody>';
        foreach ($_SESSION['agenda'] as $nombre => $telefono) {
            echo '<tr><td>' . htmlspecialchars($nombre) . '</td><td>' . htmlspecialchars($telefono) . '</td></tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p>No hay contactos en la agenda.</p>';
    }
    ?>

    <!-- Formulario para añadir nombres y teléfonos -->
    <div class="form-container">
        <form method="POST" action="">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="telefono" placeholder="Teléfono">
            <button type="submit">Enviar</button>
        </form>
    </div>

    <!-- Mensajes tanto de error como de confirmación -->
    <?php 
    if (!empty($mensaje)) {
        echo '<p class="mensaje">' . htmlspecialchars($mensaje) . '</p>';
    }
    ?>
</body>
</html>
