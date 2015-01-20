<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Tipos de datos</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">
<body>.

<h2>Funciones PHP para strings</h2>
<?php
function subString($texto){
	return substr($texto,0,100);
}
function wordlimit($texto, $length = 4, $ellipsis = "...")
{
    $words = explode(' ', $texto);
    if (count($words) > $length)
    {
            return implode(' ', array_slice($words,0, $length)) ." ". $ellipsis;
    }
    else
    {
            return $texto;
    }
}
$texto='PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; 
sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal.
Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.';
echo $texto .'<br>'.'<br>';
echo 'El número de caracteres es :'.strlen($texto).'<br>'.'<br>';
echo 'El número de palabras es :'.str_word_count("$texto").'<br>'.'<br>';
echo 'Inversion del texto :'.strrev("$texto").'<br>'.'<br>';
echo 'Cortar texto :'.subString($texto,0,100).'...<br>'.'<br>';
echo str_replace('PHP','Ruby',"$texto").'<br>'.'<br>';
echo str_replace('libre','LIBRE',"$texto").'<br>'.'<br>';
echo wordlimit($texto);
?>	
</div>
</body>
</html>
