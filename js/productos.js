function guardar()
{ 
  var codigo=document.getElementById('codigo').value;	
  var nombre=document.getElementById('nombre').value;
  var descripcion=document.getElementById('descripcion').value;	
  var precio=document.getElementById('precio').value;
  
  AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"codigo":codigo,
						"nombre":nombre,
						"descripcion":descripcion,
						"precio":precio,
						"op":"GuardaProducto"
					  }
					  ,'onSuccess':mostrar_resulGuardaProducto
					  ,'url':'Objetos/productos.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
  
}
function mostrar_resulGuardaProducto(req)
 {
    if(req.responseText==1)
    {
	 alert("Datos guardados satisfactoriamente.");
	 document.location.href="productos.html";
	}
}
function buscar_producto()
{
	var codigo=document.getElementById('codigo').value;
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
	 document.getElementById('codigo').value=dato[0]['id_producto']; 
	 document.getElementById('nombre').value=dato[0]['nombre']; 
	 document.getElementById('descripcion').value=dato[0]['descripcion']; 
	 document.getElementById('precio').value=dato[0]['precio']; 
	
	 document.getElementById('codigo').disabled=true;
	 document.getElementById('guarda').disabled=true;	
	 document.getElementById('modifica').disabled=false;
	 document.getElementById('elimina').disabled=false;	
	}
}
function modificar()
 {
  var codigo=document.getElementById('codigo').value;	
  var nombre=document.getElementById('nombre').value;
  var descripcion=document.getElementById('descripcion').value;	
  var precio=document.getElementById('precio').value;
 
  AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"codigo":codigo,
						"nombre":nombre,
						"descripcion":descripcion,
						"precio":precio,
						"op":"ModificarProducto"
					  }
					  ,'onSuccess':mostrar_resulModificarProducto
					  ,'url':'Objetos/productos.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
  
 }
function mostrar_resulModificarProducto(req)
 {
    if(req.responseText==1)
    {
	 alert("Datos Modificados satisfactoriamente."); 
	 document.location.href="productos.html";
	}
}
function eliminar()
{
  var codigo=document.getElementById('codigo').value;
  if(confirm('Est\u00E1 seguro que desea Eliminar este Producto?'))
  {	
	AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"codigo":codigo,
						"op":"EliminaProducto"
					  }
					  ,'onSuccess':mostrar_resulEliminaProducto
					  ,'url':'Objetos/productos.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
   }
	else
		{
		 alert('Operacion Cancelada');  
		 document.location.href="productos.html";
		}			  
}
function mostrar_resulEliminaProducto(req)
 {
    if(req.responseText==1)
    {
	 alert("Datos eliminados satisfactoriamente."); 
	 document.location.href="productos.html";
	}
}
function cancelar()
{
	document.location.href="productos.html";
}