
<?php
$usuario=$_POST['usuario'];
$fecha=$_POST['fecha'];
$sexo=$_POST['sexo'];
$estudios=$_POST['estudios'];
$validar=$_POST['validar'];
if($estudios=='noestudios'){
	$mensaje='No estudios';
}
if($estudios=='primarios'){
	$mensaje='Primarios';
}
if($estudios=='secundarios'){
	$mensaje='Secundarios';
}
if(isset($_POST['informacion'])){
	$infor='No recibir Informacion';
}
if(empty($_POST['informacion'])){
	$infor='Recibir Información';
}
echo "Hola $usuario , tu fecha de nacimiento es $fecha , tienes estudios $mensaje y $infor";
?>
