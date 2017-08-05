    <?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);?>
    <?php
    require_once('Productos.php');
    $productos = new MisClases\Productos();
    ?>

<!DOCTYPE html>
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
       <p>Mi sitio web creado en html5, POO en PHP</p>
    </header>
    <h3>Tabla productos</h3>
    <p>
        <?php echo $productos; ?>
    </p>
    <h3>Remeras</h3>
    <p>
        <?php echo "aca va el listado de remeras"; ?>
    </p>

    <footer>
        Taller práctico POO PHP
    </footer>


</body>
</html>
