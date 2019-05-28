<?php
include_once('../Clases/clientes.php');
include_once('../json.php');

foreach($_GET as $nombre_campo => $valor)
{
   			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
   			eval($asignacion);
}
switch($op)
{
	   case'GuardaCliente':
	   $cliente=new cliente($cedula,$nombre,$sexo,$telefono,$correo,$direccion);
	   $respuesta=$cliente->guarda_cliente();
	   echo $respuesta;
       break;
	   
	   case'BuscaCliente':
	   $cliente=new cliente($cedula,"","","","","");
	   $respuesta=$cliente->busca_cliente();
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
     
       case'ModificarCliente':
	   $cliente=new cliente($cedula,$nombre,$sexo,$telefono,$correo,$direccion);
	   $respuesta=$cliente->modifica_cliente();
	   echo $respuesta;
	   break; 
	  
	  case'EliminaCliente':
	   $cliente=new cliente($cedula,"","","","","");
	   $respuesta=$cliente->elimina_cliente();
	   echo $respuesta;
	   break;
}
?>