<!DOCTYPE html>
<html>
	<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	require "imagen.php";
	?>

<body>
	Hola amigos devcodela
	<?php $mi_objeto_imagen = new Devcodela\imagen();
	$mi_objeto_imagen->url = 'ejemplo.jpg';
	
	$ancho = 50;
	$mi_objeto_imagen->ancho = $ancho;

	echo $mi_objeto_imagen->mostrar();
	var_dump($mi_objeto_imagen);
	?>
</body>
</html>	