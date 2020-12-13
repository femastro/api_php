<?php 

	/**
	 * 
	 */
	class Productos extends Conexion
	{
		
		function getProductos(){
	        $query = $this->connect()->query('SELECT * FROM users');
	        return $query;
		}

	}


 ?>