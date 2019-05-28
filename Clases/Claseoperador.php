<?php 
class Operador
{
	private $login;
	private $password;
	function __construct($login,$password)
	{
		$this->login=$login;
		$this->password=$password;
	}
	function Buscar()
	{
		include_once('../conexion.php');
		$Consulta="SELECT * FROM sesion WHERE clave='$this->password' and rut='$this->login'";
		$resultado=pg_query($conexion,$Consulta);	
		$Datos=@pg_fetch_all($resultado);//Devuelve los datos en forma de arreglo
		if($Datos[0]['clave'])//verificar si arrojo algun resultado
			return $Datos;
		else
			return 0;		
	}
	/*function busqueda_operador()
 	{			
	$BaseDato=new BaseDeDato(SERVIDOR,PUERTO,BD,USUARIO,CLAVE);
	$Consulta="select * from operador where login='$this->login' and cedula_ope<> '$this->cedula_ope'";
	$Resultado=$BaseDato->Consultas($Consulta);
	$Datos=@pg_fetch_all($Resultado);//Devuelve los datos en forma de arreglo
		return $Datos;
	}
	public function guarda_operador()
	{
	 include_once('../php/conexion.php');
	 $sql="insert into operador (cedula_operador,nombre_operador,apellido_operador,login,password,tipo) 
	 values ('$this->cedula_ope','$this->nombre_ope','$this->apellido_ope','$this->login','$this->password','$this->tipo')";
	 $resultado=pg_query($conexion,$sql);	
	 if(pg_affected_rows($resultado)>0)
		  return 1;
		  else
		  return 0;
	}
function modifica_operador()
 {			
		include_once('../php/conexion.php');
		$sql="update operador set login='$this->login',password='$this->password',tipo='$this->tipo',nombre_operador='$this->nombre_ope',apellido_operador='$this->apellido_ope' where cedula_operador='$this->cedula_ope'";
	  $resultado=pg_query($conexion,$sql);	
	  if(pg_affected_rows($resultado)>0)
			return 1;
			else
			return 0;	
}
function busqueda_operador2()
{
  include_once('../php/conexion.php');
  $sql="SELECT * FROM operador WHERE cedula_operador='$this->cedula_ope'";
  $resultado=pg_query($conexion,$sql);	
  $Datos=@pg_fetch_all($resultado);//Devuelve los datos en forma de arreglo
  if($Datos[0]['cedula_operador'])//verificar si arrojo algun resultado
	  return $Datos;
  else
	  return 0;		
}
function busqueda_login()
 	{			
	include_once('../php/conexion.php');
	$sql="select * from operador where login='$this->login'";
	$resultado=pg_query($conexion,$sql);
	$Datos=@pg_fetch_all($resultado);//Devuelve los datos en forma de arreglo
	if($Datos[0]['cedula_operador'])//verificar si arrojo algun resultado
		return $Datos;
	else
		return 0;	
	}
function elimina_operador()
 {			
    include_once('../php/conexion.php');
	$sql="delete from operador where cedula_operador='$this->cedula_ope'";
	$resultado=pg_query($conexion,$sql);	
	if(pg_affected_rows($resultado)>0)
	  return 1;
	else
	  return 0;	
}*/
}
?>