<?php 
   session_start();
   if (!session_is_registered('login') && empty($_SESSION['login']))
   {
      header ("Location: index.html");
   }
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	
</head>
<body>
	<div class="container-fluid navbar-inverse bg-success fixed-top"><!-- navbar -->	
<nav class="navbar navbar-expand-lg container">
	<a class="navbar-brand text-white" href="#">LogoCorporativo</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		 <span class="navbar-toggler-icon"><i class="fas fa-bars text-white"></i></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
   	 <ul class="navbar-nav ml-auto">
   	   <li class="nav-item active">
           <a class="nav-link text-white" href="principal.php">Inicio <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="clientes.php">Cliente</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="servicios.php">Pago Servicios</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="depositos.html">Depositos</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="transferencias.html">Transferencias</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="saldo.html">Saldo</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="historico.html">Histórico</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="uf.php">Mostrar UF</a>
         </li>
         <li class="nav-item">
           <a class="nav-link text-white" href="#" onclick="CerrarSesion();">Cerrar Sesión</a>
         </li>
   	 </ul>
   	  </div>
</nav>

</div><!-- navbar -->
	<div class="container-fluid bg-fondo-claro">		
   	   <div class="container py-5 ">
   	   	<div class="text-center">
   	   		<h2 class="py-4">Clientes</h2>
   	   	</div>
   	   	<div class="row justify-content-center">
   	   		<div class="form-group col-md-8 col-md-offset-4">
   	   			<input type="text" placeholder="Rut" name="cedula" id="cedula" class="form-control" required onchange="buscar_cliente();">	
   	   		</div>
   	   		<div class="form-group col-md-8 col-md-offset-4">
   	   			<input type="text" placeholder="Nombres y Apellidos" name="nombre" id="nombre" class="form-control" required>	
   	   		</div>
   	   		<div class="form-group col-md-8 col-md-offset-4">
   	   			<select name="sexo" id="sexo" class="form-control" required>
   	   				<option value="">Sexo</option>
   	   				<option value="Femenino">Femenino</option>
   	   				<option value="Masculino">Masculino</option>
   	   			</select>
   	   		</div>
   	   		<div class="form-group col-md-8 col-md-offset-4">
   	   			<input type="tel" placeholder="Teléfono" name="telefono" id="telefono" class="form-control" required>	
   	   		</div>
   	   		<div class="form-group col-md-8 col-md-offset-4">
   	   			<input type="email" placeholder="Correo Electrónico" name="correo" id="correo" class="form-control" required>	
   	   		</div>
   	   		<div class="form-group col-md-8 col-md-offset-4">
   	   			<textarea name="direccion" id="direccion" placeholder="Dirección" class="form-control" cols="10" rows="2" required></textarea> 
   	   		</div>
   	   	</div>	
   	   		<div class="col-md-12 py-3">
   	   			<div class="row justify-content-center">
   	   				<button class="btn btn-primary col-md-2" name="guarda" id="guarda" onclick="guardar();">Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;
   	   				<button class="btn btn-primary col-md-2" name="modificar" id="modifica" disabled="disabled" onclick="modificar();">Modificar</button>&nbsp;&nbsp;&nbsp;&nbsp;
   	   				<button class="btn btn-primary col-md-2" name="eliminar" id="elimina" disabled="disabled" onClick="eliminar();">Eliminar</button>&nbsp;&nbsp;&nbsp;&nbsp;
   	   				<button class="btn btn-primary col-md-2" name="cancelar" id="cancelar" onClick="cancelar();">Cancelar</button>
   	   			</div>
   	   		</div>
   	   	
   	   </div>
   	   </div>
   <footer class="container-fluid bg-negro text-center text-white py-5">
   	   	Sitio wed desarrollado por nosotros mismos
   </footer>
   <script src="js/operador.js" type="text/javascript"></script>
   <script src="js/clientes.js" type="text/javascript"></script>
   <script src="js/AjaxRequest.js" type="text/javascript"></script>

</body>
</html>