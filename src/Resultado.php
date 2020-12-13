<?php 

	class Resultado{


	    function getAll(){
	        $producto = new Productos();
	        $productos = array();
	        $productos["users"] = array();

	        $res = $producto->getProductos();

	        if($res->rowCount()){
	            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
	    
	                $user = array(
	                    "id" => $row['id'], 
	                    "username" => $row['username'],
	                    "role" => $row['role'],
	                );
	                array_push($productos["users"], $user);
	            }
	        
	            echo json_encode($productos);
	        }else{
	            echo json_encode(array('mensaje' => 'No hay elementos'));
	        }
	    }
	}




 ?>