<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Email</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Formulario Email</h2>
<form method='POST' action='<?php echo $_SERVER["PHP_SELF"];?>'>
  <div class="form-group">
    <label for="texto"> Nombre</label>
    <input name='nombre' type="text" class="form-control" id="usuario" placeholder="Introduzca Nombre">
  </div>
  <div class="form-group">
    <label for="texto"> Email</label>
    <input name='email' type="email" class="form-control" id="usuario" placeholder="Introduzca Email">
  </div>
  <div class="form-group">
    <label for="asunto">Asunto</label>
    <input  name='asunto'type="text" class="form-control" id="fecha" placeholder="Introduzca Asunto">
  </div>
	 <div class="form-group">
    <label for="mensaje">Mensaje</label>
    <textarea  name='mensaje'type="text" class="form-control" id="fecha" placeholder="Introduzca su texto"></textarea>
	</div>
	<button type="submit" class="btn btn-default">Enviar</button>
  </div>
</form>
<?php


?>
</div>
</body>
</html>