<?php
session_start();
print "<h1>TABLA DE UNA FILA CON CASILLAS DE VERIFICACIÓN (RESULTADO)</h1>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $checkedCount = count($_REQUEST);

    echo "Ha marcado " . $checkedCount . " casillas." . "de un total de " . $_SESSION['numero'] . ".";
    echo '<br><br><a href="index.php">Volver al formulario inicial</a>';
}
?>