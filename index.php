<?php 

	include_once "src/Conexion.php";
	include_once "src/Productos.php";
	include_once "src/Resultado.php";

	$datos = new Resultado();

    $datos->getAll();

    var_dump($datos);

	
 ?>