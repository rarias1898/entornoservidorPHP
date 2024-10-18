<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <title>Cervezas</title>
</head>
<body>
  <h1>Inserción de cervezas</h1>

  <h4>Introduzca los datos de las Cervezas:</h4>

  <form action="listaCervezas.php" method="post">
    <div class="form-group">
      <label for="tipoCerveza">Tipo de Cerveza: </label>
      <select name="tipoCerveza" id="">
        <option value="Lager">Lager</option>
        <option value="Pale Lager">Pale Lager</option>
        <option value="Marzen">Marzen</option>
        <option value="Bock">Bock</option>
        <option value="American Lager">American Lager</option>
        <option value="Ale">Ale</option>
        <option value="Pale Ale">Pale Ale</option>
        <option value="IPA">IPA</option>
        <option value="Bitter">Bitter</option>
        <option value="Brown Ale">Brown Ale</option>
        <option value="Porter">Porter</option>
        <option value="Stout">Stout</option>
        <option value="Trapenses">Trapenses</option>
        <option value="Abadia">Abadia</option>
        <option value="Weisbier">Weisbier</option>
        <option value="Witbier">Witbier</option>
      </select>
    </div>

    <div class="form-group">
      <label for="tipoEmbase">Tipo de Embase: </label>
      <div class="radio-group">
        <input type="radio" name="tipo" id="tipo1" value="Botellin" checked>
        <label for="botellin">Botellin</label>

        <input type="radio" name="tipo" id="tipo2" value="Tercio">
        <label for="tercio">Tercio</label>

        <input type="radio" name="tipo" id="tipo3" value="1/2 litro">
        <label for="1/2litro">1/2 Litro</label>

        <input type="radio" name="tipo" id="tipo4" value="Litro">
        <label for="litro">Litro</label>

        <input type="radio" name="tipo" id="tipo5" value="Lata">
        <label for="lata">Lata</label>
      </div>
    </div>

    <div class="form-group">
      <label for="cantidadNeta">Cantidad Neta: </label>
      <select name="cantidadNeta" id="">
        <option value="25cl">25cl</option>
        <option value="33cl">33cl</option>
        <option value="1litro">1 Litro</option>
        <option value="1/2litro">1/2 Litro</option>
        <option value="2litro">2 Litros</option>
        <option value="barril25litro">Barril 25 Litros</option>
      </select>
    </div>

    <div class="form-group">
      <label for="marca">Marca del Producto: </label>
      <input type="text" name="marca" id="">
    </div>

    <div class="form-group">
      <label for="advertencia">Advertencia sobre el abuso en el consumo de alcohol: </label>
      <input type="text" name="advertencia" id="">
    </div>

    <div class="form-group">
      <label for="consumoPreferente">Fecha de Consumo Preferente: </label>
      <input type="date" name="consumoPreferente" id="">
    </div>

    <div class="form-group">
      <label for="alergenos">Indicar sustancias que pueden causar alergias: </label>
      <div class="checkbox-group">
        <input type="checkbox" name="aler[]" id="gluten" value="Gluten">
        <label for="gluten">Gluten</label>

        <input type="checkbox" name="aler[]" id="huevo" value="Huevo">
        <label for="huevo">Huevo</label>

        <input type="checkbox" name="aler[]" id="cacahuete" value="Cacahuete">
        <label for="cacahuete">Cacahuete</label>

        <input type="checkbox" name="aler[]" id="soja" value="Soja">
        <label for="soja">Soja</label>

        <input type="checkbox" name="aler[]" id="lacteo" value="Lacteo">
        <label for="lacteo">Lacteo</label>

        <input type="checkbox" name="aler[]" id="sulfitos" value="Sulfitos">
        <label for="sulfitos">Sulfitos</label>

        <input type="checkbox" name="aler[]" id="fcascara" value="Frutos con Cascara">
        <label for="fcascara">Frutos Con Cascara</label>

        <input type="checkbox" name="aler[]" id="sinAlergenos" value="Sin Alergenos" checked>
        <label for="sinAlergenos">Sin Alergenos</label>
      </div>
    </div>

    <div class="form-group">
      <label for="observaciones">Observaciones: </label>
      <textarea name="observaciones" id=""></textarea>
    </div>

    <input type="submit" value="Insertar Cerveza">
  </form>
</body>

</html>