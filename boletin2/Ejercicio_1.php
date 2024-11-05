<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1</title>
</head>
<body>
  <h1>Adivina el nuúmero entre el 1 y el 50</h1>
  <h3>Máximo de 6 intentos</h3>

  <form method="post">
    <label for="numero">Creo que es el número...</label>
    <input type="number" name="numero" id="">
    <input type="submit" value="Intentar">
  </form>
</body>
</html>

<?php
    session_start();

    if (!isset($_SESSION['random'])) {
      $_SESSION['random'] = rand(1, 50);
      $_SESSION['intentos'] = 0;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $numero = (int)$_POST['numero'];
      $_SESSION['intentos']++;

      if ($_SESSION['intentos'] <= 6) {
        if ($numero == $_SESSION['random']) {
          echo "<p>¡Felicidades, has acertado!</p>";
          session_destroy();
        } else {
          echo "<p>Lo siento, Has usado {$_SESSION['intentos']} de 6 intentos.</p>";
          if ($_SESSION['intentos'] === 6) {
            echo "<p>Has alcanzado el número máximo de intentos. El número era: {$_SESSION['random']}.</p>";
            session_destroy();
          }
        }
      }
    }
  ?>