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
   	   		<h2 class="py-4">Bienvenido Cliente <? echo $_SESSION['login']; ?></h2>
   	   	</div>
   	   	
   	   	</div>
   	   	
   	   </div>
   	   </div>
   <footer class="container-fluid bg-negro text-center text-white py-5">
   	   	Sitio wed desarrollado por nosotros mismos
   </footer>
   <script src="js/operador.js" type="text/javascript"></script>
   <script src="js/AjaxRequest.js" type="text/javascript"></script>

</body>
</html>