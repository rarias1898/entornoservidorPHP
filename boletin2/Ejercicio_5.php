<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 6</title>
</head>
<body>
  <!-- Escribe un programa que pida 6 números uno detrás de otro (no se pueden pedir los
6 en la misma página) y que, a continuación, muestre el máximo, el mínimo y el
número de primos (solo la cantidad).  -->
  <h1>Ejercicio 5: Ingrese 6 números</h1>

  <?php
  session_start();

  function esPrimo($num) {
      if ($num < 2) return false;
      for ($i = 2; $i <= sqrt($num); $i++) {
          if ($num % $i == 0) return false;
      }
      return true;
  }

  if (!isset($_SESSION['numeros'])) {
      $_SESSION['numeros'] = [];
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
      $numero = (int) $_POST['numero'];
      $_SESSION['numeros'][] = $numero;
  }

  if (count($_SESSION['numeros']) == 6) {
      $numeros = $_SESSION['numeros'];
      $maximo = max($numeros);
      $minimo = min($numeros);
      $primos = count(array_filter($numeros, 'esPrimo'));

      echo "<p><strong>Máximo:</strong> $maximo</p>";
      echo "<p><strong>Mínimo:</strong> $minimo</p>";
      echo "<p><strong>Número de primos:</strong> $primos</p>";

      session_destroy();
  } else {
      $contador = count($_SESSION['numeros']) + 1;
      echo "<form method='post' action=''>";
      echo "<label for='numero'>Ingrese el número $contador:</label>";
      echo "<input type='number' name='numero' required>";
      echo "<button type='submit'>Enviar</button>";
      echo "</form>";
  }
  ?>
</body>
</html>
