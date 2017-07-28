<!DOCTYPE html>
<html>
	<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	require "logo.php";
	?>
	<body>
	Hola amigos devcodela
	<?php $mi_objeto_logo = new Devcodela\Logo();

	$mi_objeto_logo->url = 'ejemplo.jpg';
	
	echo $mi_objeto_logo->mostrar();
	var_dump($mi_objeto_imagen);
	?>
	</body>
</html>	
