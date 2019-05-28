<?PHP
class producto
{
	private $codigo_p;
	private $nombre_p;
	private $descipcion_p;
	private $precio_p;
	
	public function __construct($codigo_p,$nombre_p,$descipcion_p,$precio_p)
	{
		$this->codigo_p=$codigo_p;
		$this->nombre_p=$nombre_p;
		$this->descipcion_p=$descipcion_p;
		$this->precio_p=$precio_p;
	}
	public function busca_producto()
	{
	 include_once('../conexion.php');
     $sql="select * from producto where id_producto='$this->codigo_p'";
	 $resultado=pg_query($conexion,$sql);	
	 $esp=@pg_fetch_all($resultado);
	 if($esp[0]['id_producto'])
		return $esp;
	 else
		 return 0;	
	}
	public function guarda_producto()
	{
	 include_once('../conexion.php');
     $sql="insert into producto(id_producto,nombre,descripcion,precio) values ('$this->codigo_p','$this->nombre_p','$this->descipcion_p','$this->precio_p')";
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
	public function modifica_producto()
	{
	 include_once('../conexion.php');
     $sql="update producto set nombre='$this->nombre_p',descripcion='$this->descipcion_p',precio='$this->precio_p' where id_producto='$this->codigo_p'";         
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
	public function elimina_producto()
	{
	 include_once('../conexion.php');
     $sql="delete from producto where id_producto='$this->codigo_p'";         
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
 }
?>
