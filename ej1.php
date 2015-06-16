<?php
  $txtNombre = "";
  $txtApellido = "";


  if(isset($_POST["btnGuardar"])){
    $txtNombre = $_POST["txtNombre"];
    $txtApellido = $_POST["txtApellido"];


}


?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8"/>
  <title> Formulario  </title>
</head>
<body>
  <h1> Formulario P2 </h1>
  <form action="ej1.php" method="post">
    <label for="txtNombre">Nombre </label>
    <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre"
    value="<?php echo $txtNombre; ?>" />

  </br>

  <label for="txtApellido">Apellido </label>
  <input type="text" id="txtApellido" name="txtApellido" placeholder="Apellido"
  value="<?php echo $txtApellido; ?>" />
</br>

<input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar"  />
</br>


</form>

</body>
</html>
