function imprime_fecha()
{
	var hoy = new Date();
	document.getElementById('fecha').value=hoy.getFullYear()+"-"+(hoy.getMonth()+1)+"-"+hoy.getDate();
}
function ultima_factura()
{
 AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"op":"ultima_factura"
					  }
					  ,'onSuccess':mostrar_resulBusquedaCodigoCompra
					  ,'url':'Objetos/compras.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
}
function mostrar_resulBusquedaCodigoCompra(req)
 {
	if(req.responseText>0)
    {
	 document.getElementById('idcompra').value=req.responseText;	
	}
}
function buscar_cliente()
{
	var cedula=document.getElementById('cedulac').value;
	AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"cedula":cedula,
						"op":"BuscaCliente"
					  }
					  ,'onSuccess':mostrar_resulBuscaCliente
					  ,'url':'Objetos/clientes.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
}
function mostrar_resulBuscaCliente(req)
 {
   var resultado=req.responseText;
   var dato=eval("("+resultado+")");	
	if(resultado!=0)
	{
	 document.getElementById('cedulac').value=dato[0]['cedula']; 
	 document.getElementById('nombrec').value=dato[0]['nombre_apellido']; 
	}
	else
	{
		alert("La cédula introducida no se encuentra asociada a ningun cliente.");
		document.getElementById("cedulac").value="";
		document.getElementById("cedulac").focus();
	}
}
function buscar_producto()
{
	var codigo=document.getElementById('codigop').value;
	AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"codigo":codigo,
						"op":"BuscaProducto"
					  }
					  ,'onSuccess':mostrar_resulBuscaProducto
					  ,'url':'Objetos/productos.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
}
function mostrar_resulBuscaProducto(req)
 {
   var resultado=req.responseText;
   var dato=eval("("+resultado+")");	
	if(resultado!=0)
	{
	 document.getElementById('codigop').value=dato[0]['id_producto']; 
	 document.getElementById('nombrep').value=dato[0]['nombre']; 
	 document.getElementById('preciop').value=dato[0]['precio']; 
	}
	else
	{
		alert("La codigo introducido no se encuentra asociado a ningun producto.");
		document.getElementById("codigop").value="";
		document.getElementById("codigop").focus();
	}
}
function calcular()
{
 var precio = document.getElementById('preciop').value;
 var cantidad = document.getElementById('cantidadp').value;
 //alert(precio+"*"+cantidad)
 document.getElementById('totalp').value=precio*cantidad;
 document.getElementById('subtotal').value=eval(document.getElementById('subtotal').value+"+"+ document.getElementById('totalp').value);
}