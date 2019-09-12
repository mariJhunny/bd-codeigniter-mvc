<!DOCTYPE html>
<html>
	<head>
      <meta charset="utf-8">
	  <title>Plantilla Ejemplo</title>
	  <link href="<?php echo base_url(); ?>activos/estilos.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<header>
	<section class="contenedor">
	<h1>Clases Personales</h1>
	<p>P&aacute;gina ejemplo para el uso de plantilla con CodeIgniter</p>
	</section>
	</header>
	<nav>
	   <section class="contenedor">
	   <ul>
	      <li><a href="<?php echo base_url(); ?>index.php/principal">Inicio</a></li>
	      <li><a href="<?php echo base_url(); ?>index.php/zonas">Zonas</a></li>
	      <li><a href="<?php echo base_url(); ?>index.php/clientes">Clientes</a></li>
	      <li><a href="<?php echo base_url(); ?>index.php/vendedores">Vendedores</a></li>
		  <li><a href="<?php echo base_url(); ?>index.php/jefeventas">Jefes Ventas</a></li>
		  <li><a href="<?php echo base_url(); ?>index.php/productos">Productos</a></li>
		</ul>
	   </section>
	</nav>