function VerificarTecla(Evento) // Iniciar Sesion al presionar ENTER
{
	tecla = (document.all) ? Evento.keyCode : Evento.which;
	if (tecla==13) 
	IniciarSesion();
}
function ValidacionInicioSesion()
{
	//alert("paso")
	var campo=new Array("rut","clave");
	var resultado=new Array("Rut","Clave");
	var error="";
	for(var i=0;i<campo.length;i++)
	{
		if(document.getElementById(campo[i]).value== "")
		{
			error=error+"-"+resultado[i]+"\n";
		}
	}
	if (error!="")
	{
		alert("Error de validacion, complete los siguentes campos: \n"+error);
		return false;
	}
	return true;
}
function IniciarSesion()
{
 var usuario=document.getElementById('rut').value;
 var clave=document.getElementById('clave').value;

 if(ValidacionInicioSesion())		
 {
  AjaxRequest.get
  (
		 {'parameters':
		   {'accion':"IniciandoSesion",
		    'usuario':usuario,
		    'clave':clave
		   },
		'onSuccess':VerificarInicioSesion,
		'url':"objetos/Operador.php",
		'onError':function(req){alert('ERROR!\nStatusText='+req.statusText+'\nContens='+req.responseText);}
		}
   );
		}
}

function VerificarInicioSesion(req)
{ 
	var Resultado=eval("("+ req.responseText +")");
	if(Resultado.length>=1)
	{		
		AjaxRequest.get
		({'parameters':
		 {
			 'accion':"RegistrandoSesion",
			 'login':Resultado[0]['rut'],
			 'password':Resultado[0]['clave'],
		},
		'onSuccess':VerificarRegistroSesion,
		'url':"objetos/Operador.php",
		'onError':function(req){alert('ERROR!\nStatusText='+req.statusText+'\nContens='+req.responseText);}
		});
	}
	else
	if(req.responseText==0)
	{
		alert("Operador No Registrado o cuenta Deshabilitada!");	
		document.getElementById('clave').value="";
	}
}
function VerificarRegistroSesion(req)
{
	var Resultado=eval("("+ req.responseText +")");
	if(Resultado==1)
	{
		document.location.href="principal.php";
	}
}
function CerrarSesion()
{
	AjaxRequest.get
		(
		 {'parameters':{'accion':"CerrandoSesion"},
		'onSuccess':VerificarCerrarSesion,
		'url':"Objetos/Operador.php",
		'onError':function(req){alert('ERROR!\nStatusText='+req.statusText+'\nContens='+req.responseText);}
		});
}
function VerificarCerrarSesion(req)
{
	var Resultado=eval("("+ req.responseText +")");
	if(Resultado==1)
	{
		document.location="index.html";
	}
}