<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sistema de Clientes</title>
	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="./../../css/style.css">
</head>
<body>
	<header>
		<a href="./../sells/sells.php">Ventas</a>
		<a href="#">Clientes</a>
		<a href="./search.php">Buscar Cliente</a>
		<a href="./../products/products.php">Productos</a>
		<a href="./../products/search.php">Buscar Producto</a>
	</header>
	<?php
		include __DIR__ . '/create.php';
		include __DIR__ . '/read.php';
	?>
</body>
</html>
