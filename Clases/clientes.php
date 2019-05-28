<?PHP
class cliente
{
	private $cedula_c;
	private $nombre_c;
	private $sexo_c;
	private $telefono_c;
	private $correo_c;
	private $direccion_c;
	
	public function __construct($cedula_c,$nombre_c,$sexo_c,$telefono_c,$correo_c,$direccion_c)
	{
		$this->cedula_c=$cedula_c;
		$this->nombre_c=$nombre_c;
		$this->sexo_c=$sexo_c;
		$this->telefono_c=$telefono_c;
		$this->correo_c=$correo_c;
		$this->direccion_c=$direccion_c;
	}
	public function busca_cliente()
	{
	 include_once('../conexion.php');
     $sql="select * from cliente where rut='$this->cedula_c'";
	 $resultado=pg_query($conexion,$sql);	
	 $esp=@pg_fetch_all($resultado);
	 if($esp[0]['rut'])
		return $esp;
	 else
		 return 0;	
	}
	public function guarda_cliente()
	{
	 include_once('../conexion.php');
     $sql="insert into cliente(rut,nombre,sexo,telefono,direccion,correo) values ('$this->cedula_c','$this->nombre_c','$this->sexo_c','$this->telefono_c','$this->direccion_c','$this->correo_c')";
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
	public function modifica_cliente()
	{
	 include_once('../conexion.php');
     $sql="update cliente set nombre='$this->nombre_c',telefono='$this->telefono_c',direccion='$this->direccion_c',sexo='$this->sexo_c',correo='$this->correo_c' where rut='$this->cedula_c'";         
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
	public function elimina_cliente()
	{
	 include_once('../conexion.php');
     $sql="delete from cliente where rut='$this->cedula_c'";         
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
 }
?>
