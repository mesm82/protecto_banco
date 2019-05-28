function guardar()
{ 
  var cedula=document.getElementById('cedula').value;	
  var nombre=document.getElementById('nombre').value;
  var sexo=document.getElementById('sexo').value;	
  var telefono=document.getElementById('telefono').value;
  var correo=document.getElementById('correo').value;
  var direccion=document.getElementById('direccion').value;	
  AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"cedula":cedula,
						"nombre":nombre,
						"sexo":sexo,
						"telefono":telefono,
						"correo":correo,
						"direccion":direccion,
						"op":"GuardaCliente"
					  }
					  ,'onSuccess':mostrar_resulGuardaClientes
					  ,'url':'Objetos/clientes.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
  
}
function mostrar_resulGuardaClientes(req)
 {
    if(req.responseText==1)
    {
	 alert("Datos guardados satisfactoriamente.");
	 document.location.href="clientes.html";
	}
}
function buscar_cliente()
{
	var cedula=document.getElementById('cedula').value;
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
 {alert(req.responseText)
   var resultado=req.responseText;
   var dato=eval("("+resultado+")");	
	if(resultado!=0)
	{
	 document.getElementById('cedula').value=dato[0]['rut']; 
	 document.getElementById('nombre').value=dato[0]['nombre']; 
	 document.getElementById('sexo').value=dato[0]['sexo']; 
	 document.getElementById('telefono').value=dato[0]['telefono']; 
	 document.getElementById('correo').value=dato[0]['correo']; 
	 document.getElementById('direccion').value=dato[0]['direccion'];
	
	 document.getElementById('cedula').disabled=true;
	 document.getElementById('guarda').disabled=true;	
	 document.getElementById('modifica').disabled=false;
	 document.getElementById('elimina').disabled=false;	
	}
}
function modificar()
 {
  var cedula=document.getElementById('cedula').value;	
  var nombre=document.getElementById('nombre').value;
  var sexo=document.getElementById('sexo').value;	
  var telefono=document.getElementById('telefono').value;
  var correo=document.getElementById('correo').value;
  var direccion=document.getElementById('direccion').value;	
 
  AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"cedula":cedula,
						"nombre":nombre,
						"sexo":sexo,
						"telefono":telefono,
						"correo":correo,
						"direccion":direccion,
						"op":"ModificarCliente"
					  }
					  ,'onSuccess':mostrar_resulModificarCliente
					  ,'url':'Objetos/clientes.php'
					  ,'onError':function(req)
					  { 
						  alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
					  }
				  }
			 );
  
 }
function mostrar_resulModificarCliente(req)
 {
    if(req.responseText==1)
    {
	 alert("Datos Modificados satisfactoriamente."); 
	 document.location.href="clientes.html";
	}
}
function eliminar()
{
  var cedula=document.getElementById('cedula').value;
  if(confirm('Est\u00E1 seguro que desea Eliminar este Cliente?'))
  {	
	AjaxRequest.get
			  (	
				  {
					  'parameters':
					  { 
						"cedula":cedula,
						"op":"EliminaCliente"
					  }
					  ,'onSuccess':mostrar_resulEliminaCliente
					  ,'url':'Objetos/clientes.php'
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
		 document.location.href="clientes.html";
		}			  
}
function mostrar_resulEliminaCliente(req)
 {
    if(req.responseText==1)
    {
	 alert("Datos eliminados satisfactoriamente."); 
	 document.location.href="clientes.html";
	}
}
function cancelar()
{
	document.location.href="clientes.html";
}