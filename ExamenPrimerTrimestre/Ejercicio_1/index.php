<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <h1>TABLA DE UNA FILA CON CASILLAS DE VERIFICACIÓN (FORMULARIO 1)</h1>
    <p>Escriba un número (0 < número <= 20) y mostraré una tabla de una fila de ese tamaño con casillas de verificación en cada celda.</p>

    <form action="formulario_2.php" method="post">
      <label for="numero">Tamaño de la tabla</label>
      <input type="number" name="numero" id="numero">
      <br> <br>
      <input type="submit" value="Mostrar">
    </form>
  </body>
  </html>