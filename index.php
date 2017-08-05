<!DOCTYPE html>
	<?php require "Productos.php" ?>
<html lang="es">
<head>
<title>Taller POO PHP</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<header>
		<h1>Mi tienda Online</h1>
		<p>Mi sitio web creado en html5, POO EN PHP</p>
	</header>
	<h3>Tabla productos</h1>
	<p>
		<?php $productos = new Productos(); ?>
		<?php $productos->mostrar(); ?>
	</p>
	<h3>Remeras</h3>	
	<p>
		<?php echo "aca va el listado de remeras"; ?>
	</P>

	<footer>
		Taller práctico POO php
	</footer>
</body>
</html>	