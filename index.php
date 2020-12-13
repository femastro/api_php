<?php 

	include_once "src/Resultado.php";

	$datos = new Resultado();

    $datos->getAll();

    var_dump($datos);

	
 ?>