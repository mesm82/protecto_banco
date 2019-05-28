<?php
include_once('../Clases/compras.php');
include_once('../json.php');

foreach($_GET as $nombre_campo => $valor)
{
   			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
   			eval($asignacion);
}
switch($op)
{
	 case'ultima_factura':
	   $compra=new compra("","","","","");
	   $respuesta=$compra->busca_ult_factura();
	   echo $respuesta;
	 break;
	 case'GuardaCompra':
	   $compra=new compra($cod_compras,$cedula,$cod_producto,$fecha,$cantidad);
	   $respuesta=$compra->guarda_compra();
	   echo $respuesta;
	 break; 
	 case'EliminarCompra':
	   $compra=new compra($cod_compras,"","","","");
	   $respuesta=$compra->elimina_compra();
	   echo $respuesta;
	 break; 
	 case'BusquedaComprasSinPagar':
	   $compra=new compra($cod_compras,"","","","");
	   $respuesta=$compra->busca_compra_sin_pagar();
	   echo $respuesta;
	 break;
}
?>