<?php require "imagen.php"; ?>
<html>
<body>
	Hola amigos devcodela
	<?php $mi_objeto_imagen = new imagen();
	$mi_objeto_imagen->url = 'ejemplo.jpg';
	echo $mi_objeto_imagen->mostrar();
	var_dump($mi_objeto_imagen);
	?>
</body>
</html>	