<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>
<body>
  <!-- Hacer un programa hacer que realice una conversión entre diferentes tipos de datos en
PHP.
Crear una variable $var con los valores que se observa en la tabla adjunta y para cada valor
de la variable $var, pintar por pantalla la conversión de cada valor a los siguientes tipos:
int, boolean, string y float  -->

  <h1>Conversión de tipos de datos</h1>
  <table>
    <thead>
      <tr>
        <th>Valor</th>
        <th>int</th>
        <th>boolean</th>
        <th>string</th>
        <th>float</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $var = [null, true, false, 0, 3.8, '0', '10', '6 metros', 'hola'];
        foreach ($var as $value) {
          echo "<tr>";
          echo "<td>$value</td>";
          echo "<td>" . (int)$value . "</td>";
          echo "<td>" . (bool)$value . "</td>";
          echo "<td>" . (string)$value . "</td>";
          echo "<td>" . (float)$value . "</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>