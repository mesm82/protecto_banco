<?PHP
class compra
{
	private $num_factura;
	private $fecha_compra;
	private $cedula_compra;
	private $id_producto_compra;
	private $cantidad_compra;
	
	public function __construct($num_factura,$fecha_compra,$cedula_compra,$id_producto_compra,$cantidad_compra)
	{
		$this->num_factura=$num_factura;
		$this->fecha_compra=$fecha_compra;
		$this->cedula_compra=$cedula_compra;
		$this->id_producto_compra=$id_producto_compra;
		$this->cantidad_compra=$cantidad_compra;
	}
	public function busca_ult_factura()
	{
	 include_once('../conexion.php');
	 
	  $sql3="select max(num_factura) as mayor from compra";
      $con3=pg_query($conexion,$sql3);
      $reg3=pg_fetch_array($con3);
      $ultimo=$reg3['mayor'];
	  $ul_cod=$ultimo+1;
	  return $ul_cod;
	}
	public function guarda_compra()
	{
	 include_once('../conexion.php');
     $sql="insert into compras(cod_compras,cedula,cod_producto,fecha_compra,cantidad_comp) values ('$this->cod_compras','$this->ced_compras','$this->cod_prod_compras','$this->fecha_compras','$this->cantidad_compras')";
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
	public function generar_factura()
	{
	 include_once('../conexion.php');
     $sql="Select a.*,b.*,c.* from compras as a, producto as b, cliente as c where a.cod_compras='$this->cod_compras' and a.cedula=c.cedula and a.cod_producto=b.cod_producto";
	 $resultado=pg_query($conexion,$sql);	
	 $esp=@pg_fetch_all($resultado);
	 if($esp[0]['cod_producto'])
		return $esp;
	 else
		 return 0;	
	}
	public function elimina_compra()
	{
	 include_once('../conexion.php');
     $sql="delete from compras where cod_compras='$this->cod_compras'";         
     $resultado=pg_query($conexion,$sql);	
     if(pg_affected_rows($resultado)>0)
		return 1;
	  else
		return 0;
	}
	public function busca_compra_sin_pagar()
	{
	 include_once('../conexion.php');
     $sql="Select *from compras where cod_compras='$this->cod_compras'";
	 $resultado=pg_query($conexion,$sql);	
	 $esp=@pg_fetch_all($resultado);
	 if($esp[0]['cod_compras'])
	 {
	  $sql2="delete from compras where cod_compras='$this->cod_compras'";         
      $resultado2=pg_query($conexion,$sql2);	
      if(pg_affected_rows($resultado2)>0)
		return 1;
	  else
		return 0;
	 }
	 else
	   {
		 return 0;	
	   }
	}
 }
?>
