<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">


<h2>Empresa</h2>
<?php
$id=$_GET['id'];
switch($id){
case "es":
echo'La rata come tarta';
break;
case "en":
echo'The rat eats cake';
break;
case "fr":
echo 'Le rat mange le gâteau';
break;
case "gr":
echo 'Die Ratte Kuchen isst';
break;

}

?>
</div>
</body>
</html>
