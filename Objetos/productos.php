<?php
include_once('../Clases/productos.php');
include_once('../json.php');

foreach($_GET as $nombre_campo => $valor)
{
   			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
   			eval($asignacion);
}
switch($op)
{
	   case'GuardaProducto':
	   $producto=new producto($codigo,$nombre,$descripcion,$precio);
	   $respuesta=$producto->guarda_producto();
	   echo $respuesta;
       break;
	   
	   case'BuscaProducto':
	   $producto=new producto($codigo,"","","");
	   $respuesta=$producto->busca_producto();
	   if(!is_array($respuesta))
		{
			$json=new Services_JSON(); 
			$resp=$json->encode(0);
		}
		else
		{
			$json=new Services_JSON();
			$resp=$json->encode($respuesta);
		}
	   echo $resp;
	   break;
     
       case'ModificarProducto':
	   $producto=new producto($codigo,$nombre,$descripcion,$precio);
	   $respuesta=$producto->modifica_producto();
	   echo $respuesta;
	   break; 
	  
	  case'EliminaProducto':
	   $producto=new producto($codigo,"","","");
	   $respuesta=$producto->elimina_producto();
	   echo $respuesta;
	   break;
}
?>