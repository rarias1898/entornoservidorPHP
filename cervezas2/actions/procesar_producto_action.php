<?php
session_start();
require_once '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir los datos del formulario
    $denominacion = $conn->real_escape_string($_POST['denominacion']);
    $marca = $conn->real_escape_string($_POST['marca']);
    $tipo = $conn->real_escape_string($_POST['tipo']);
    $formato = $conn->real_escape_string($_POST['formato']);
    $tamano = $conn->real_escape_string($_POST['tamano']);
    $alergenos = $conn->real_escape_string($_POST['alergenos']);
    $fecha_consumo = $_POST['fecha_consumo']; 
    $precio = floatval($_POST['precio']);
    $observaciones = $conn->real_escape_string($_POST['observaciones']);

    // Manejo de la imagen
    $imagenRuta = null;
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $directorioSubida = "../uploads/";
        if (!is_dir($directorioSubida)) {
            mkdir($directorioSubida, 0777, true); // Esto crea la carpeta uploads si no existe
        }
        $imagenNombre = time() . "_" . basename($_FILES['imagen']['name']);
        $imagenRuta = $directorioSubida . $imagenNombre;

        if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenRuta)) {
            die("Error al subir la imagen.");
        }
    }

    // Query para insertar los datos
    $sql = "INSERT INTO productos (denominacion, marca, tipo, formato, tamaño, alergenos, fecha_consumo, precio, imagen, observaciones)
            VALUES ('$denominacion', '$marca', '$tipo', '$formato', '$tamano', '$alergenos', '$fecha_consumo', $precio, '$imagenRuta', '$observaciones')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto añadido correctamente.";
        header("Location: ../pages/home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>
