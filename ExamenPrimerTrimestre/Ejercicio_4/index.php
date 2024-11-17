<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h1>ÍNDICE DE MASA CORPORAL (FORMULARIO)</h1>
    <p>Escriba su peso en kilogramos y su altura en centímetros para calcular su índice de masa corporal.</p>

    <form action="calcular.php" method="post">
      <label for="peso">Peso</label>
      <input type="number" name="peso" id="peso" required> kg
      <br>
      <label for="altura">Altura</label>
      <input type="number" name="altura" id="altura" required> cm
      <br> <br>
      <button type="submit">Calcular</button>
  </body>
</html>