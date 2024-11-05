<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 8</title>
</head>
<body>
  <!-- Crear un programa, que diseñe curriculum vitae, se solicitaran los siguientes datos Solicitará el nombre, apellidos, Sexo, correo electrónico, numero de contacto, experiencia
laboral, estudios, elegirá jornada laboral entre por la mañana, por la tarde o indiferente y
elegirá los idiomas que domine.   -->
  <form action="curriculum.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos" required>
    <br>
    <label for="sexo">Sexo:</label>
    <input type="radio" name="sexo" id="sexo" value="Hombre" required>Hombre
    <input type="radio" name="sexo" id="sexo" value="Mujer" required>Mujer
    <br>
    <label for="correo">Correo electrónico:</label>
    <input type="email" name="correo" id="correo" required>
    <br>
    <label for="telefono">Número de contacto:</label>
    <input type="tel" name="telefono" id="telefono" required>
    <br>
    <label for="experiencia">Experiencia laboral:</label>
    <textarea name="experiencia" id="experiencia" required></textarea>
    <br>
    <label for="estudios">Estudios:</label>
    <textarea name="estudios" id="estudios" required></textarea>
    <br>
    <label for="jornada">Jornada laboral:</label>
    <select name="jornada" id="jornada" required>
      <option value="Mañana">Por la mañana</option>
      <option value="Tarde">Por la tarde</option>
      <option value="Indiferente">Indiferente</option>
    </select>
    <br>
    <label for="idiomas">Idiomas:</label>
    <input type="checkbox" name="idiomas[]" id="idiomas" value="Inglés">Inglés
    <input type="checkbox" name="idiomas[]" id="idiomas" value="Francés">Francés
    <input type="checkbox" name="idiomas[]" id="idiomas" value="Alemán">Alemán

    <input type="submit" value="Enviar">
  </form>
</body>
</html>