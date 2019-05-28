<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Compra</title>
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
   	     <a class="nav-link text-white" href="index.html">Inicio <span class="sr-only">(current)</span></a>
   	   </li>
   	   <li class="nav-item">
   	     <a class="nav-link text-white" href="index.html#nosotros">Nuestros Planes</a>
   	   </li>
   	   <li class="nav-item">
   	     <a class="nav-link text-white" href="clientes.html">Clientes</a>
   	   </li>
   	   <li class="nav-item">
   	     <a class="nav-link text-white" href="productos.html">Productos</a>
   	   </li>
   	   <li class="nav-item">
   	     <a class="nav-link text-white" href="compras.php">Compras</a>
   	   </li>
   	 </ul>
   	  </div>
</nav>
<form name="clientes" method="post">
</div><!-- navbar -->
	<div class="container-fluid bg-fondo-claro">		
   	   <div class="container py-5 ">
   	   	<div class="text-center">
   	   		<h2 class="py-4">Compras</h2>
   	   	</div>
            <div class="form-row">
               <div class="col-md-2"></div>
               <div class="form-group col-md-4">
                <label>Fecha Actual</label><output name="fecha" id="fecha" class="form-control"></output> 
               </div>
                <div class="form-group col-md-4">
                 <label>Número de Factura</label><output name="idcompra" id="idcompra" class="form-control"></output> 
               </div>
               <div class="col-md-2"></div>
            </div>

            <div class="form-row">
               <div class="col-md-2"></div>
               <div class="form-group col-md-4">
                 <label>Cédula del Cliente</label><input type="number" placeholder="Cédula del Cliente" name="cedulac" id="cedulac" class="form-control" required onchange="buscar_cliente();">
               </div>
                <div class="form-group col-md-4">
                 <label>Nombre del Cliente</label><output name="nombrec" id="nombrec" class="form-control"></output>
               </div>
               <div class="col-md-2"></div>
            </div>

            <div class="form-row">
               <div class="col-md-2"></div>
               <div class="form-group col-md-4">
                 <label>Código del Producto</label><input type="text" placeholder="Código del Producto" name="codigop" id="codigop" class="form-control" required onchange="buscar_producto();"> 
               </div>
                <div class="form-group col-md-4">
                 <label>Nombre del Producto</label><output name="nombrep" id="nombrep" class="form-control"></output> 
               </div>
               <div class="col-md-2"></div>
            </div>

             <div class="form-row">
               <div class="col-md-2"></div>
               <div class="form-group col-md-4">
                 <label>Precio del Producto</label><output name="preciop" id="preciop" class="form-control"></output> 
               </div>
                <div class="form-group col-md-4">
                 <label>Cantidad del Producto</label> <input type="number" placeholder="Cantidad del Producto" name="cantidadp" id="cantidadp" class="form-control" required onChange="calcular();"> 
               </div>
               <div class="col-md-2"></div>
            </div>

            <div class="form-row">
               <div class="col-md-2"></div>
               <div class="form-group col-md-4">
                 <label>Total por Producto</label><output name="totalp" id="totalp" class="form-control"></output>
               </div>
                <div class="form-group col-md-4">
                  <label>SubTotal</label><output name="subtotal" id="subtotal" class="form-control"></output>
               </div>
               <div class="col-md-2"></div>
            </div>
   	   		<div class="col-md-12 py-3">
   	   			<div class="row justify-content-center">
   	   				<button class="btn btn-primary col-md-2" name="procesar" id="procesar" onClick="procesa();">Procesar</button>&nbsp;&nbsp;&nbsp;&nbsp;
   	   				<button class="btn btn-primary col-md-2" name="pagar" id="pagar" disabled="disabled" onClick="pagar();">Pagar</button>&nbsp;&nbsp;&nbsp;&nbsp;
   	   				<button class="btn btn-primary col-md-2" name="cancelar" id="cancelar" onClick="cancelar();">Cancelar</button>
   	   			</div>
   	   		</div>
   	   	
   	   </div>
   	   </div>
   	</form>
   <footer class="container-fluid bg-negro text-center text-white py-5 mt-2">
   	   	Sitio wed desarrollado por nosotros mismos
   </footer>
   <script src="js/compras.js" type="text/javascript"></script>
   <script src="js/AjaxRequest.js" type="text/javascript"></script>	
</body>
</html>
<script type="text/javascript" language="javascript">
  imprime_fecha();
</script>
<script type="text/javascript" language="javascript">
  ultima_factura();
</script>