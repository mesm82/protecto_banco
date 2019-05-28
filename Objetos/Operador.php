<?php
include_once("../Clases/Claseoperador.php");
include_once("../json.php");
foreach($_GET as $NombreCampo => $Valor)
{
	$Asignacion = "\$".$NombreCampo."='".$Valor."';";
	eval($Asignacion);
}
switch($accion)
{		
		case 'IniciandoSesion':
		$Operador=new Operador($usuario,$clave);
		$Salida=$Operador->Buscar();		
		if(!is_array($Salida))
		{
			$Json=new Services_JSON();
			$Respuesta=$Json->encode(0);
		}
		else
		{
			$Json=new Services_JSON();
			$Respuesta=$Json->encode($Salida);
		}
		echo $Respuesta;		
		break;
		case 'RegistrandoSesion':
		session_start();
		$Salida=session_register('login','password');
		$_SESSION['login']=$login;
		$_SESSION['password']=$password;	
		echo $Salida;
		break;
		case 'CerrandoSesion':
			session_start(); 
			$Salida=session_destroy();
			echo $Salida;
		break;
}
?>