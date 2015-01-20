<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Formulario validado en la misma página</h2>
<form method='POST'action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
  <div class="form-group">
    <label for="texto">Nombre de usuario</label>
    <input name='nombre' type="text" class="form-control" id="usuario" placeholder="Introduzca nombre" required>
  </div>
  <div class="form-group">
    <label for="contrasena1">Introduzca Contraseña</label>
    <input  name='contrasena1'type="password" class="form-control" id="fecha" placeholder="Introduzca Contraseña" required>
  </div>
	 <div class="form-group">
    <label for="contrasena2">Confirmar Contraseña</label>
    <input  name='contrasena2'type="password" class="form-control" id="fecha" placeholder="Confirme Contraseña"required>
	</div>
	<button type="submit" class="btn btn-default">Enviar</button>
  </div>
</form>
<?php
$nombre=$_POST['nombre'];
$contrasena1=$_POST['contrasena1'];
$contrasena2=$_POST['contrasena2'];
if($contrasena1 != $contrasena2){
echo 'La contraseñas son diferentes';
}
if(empty($_POST['nombre'])){
	echo 'Rellene todos los campos';
}
if(empty($_POST['contrasena1'])){
	echo 'Rellene todos los campos';
}
if(empty($_POST['contrasena2'])){
	echo 'Rellene todos los campos';
}
if(isset($_POST['nombre'])){
	echo 'Correcto';
}
?>

</div>
</body>
</html>