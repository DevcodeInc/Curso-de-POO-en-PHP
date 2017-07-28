<html>
<?php require "imagen.php" ?>
<body>
	Hola amigos devcodela
	<?php $mi_objeto_imagen = new Devcodela\imagen();

	//$mi_objeto_imagen->url = 'ejemplo.jpg';
	echo $mi_objeto_imagen->mostrar();
	var_dump($mi_objeto_imagen);
	?>
</body>
</html>	