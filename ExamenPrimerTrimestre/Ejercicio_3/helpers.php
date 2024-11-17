<?php
// Generador de dni aleatorios.
$numero = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
$letra = chr(rand(65, 90));
$dni = $numero . $letra;
?>
