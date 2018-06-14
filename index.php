<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Recomendaciones de Lectura | Home</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="bower_components/components-bootstrap/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<style type="text/css">
		*
		{
			font-family: 'Ubuntu', sans-serif;
		}

		.nav
		{
			font-weight:100;
			font-size:18px;
			padding-left:70px;
			padding-right:70px;
		}

		.nav button
		{
			background-color:#4C84DB;
			padding:6px 18px;
		}

		.nav-header
		{
			padding-left:70px;
		}

		.nav-header-logo
		{
			color:#4C84DB;
			float:left;
			margin-top:15px;
			margin-right:10px;
		}

		.nav-header-text
		{
			margin-top:0px;
			float:left;
		}


		.nav-header-text h1
		{
			color:#2B559E;
			font-size:32px;
			font-weight:500;
			font-style: normal;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		@media (min-width: 768px)
		{
			.navbar-form {
				width: auto;
				padding-top: 0;
				padding-bottom: 0;
				margin-right: 0;
				margin-left: 132px;
				border: 0;
				-webkit-box-shadow: none;
				box-shadow: none;
			}
		}

		@media(max-width: 992px )
		{
			.nav-header
			{
				padding-left:55px;
			}
			.nav-header-text h1
			{
				font-size:24px;
				font-weight:500;
				font-style: normal;
				margin-top: 10px;
				margin-bottom: 10px;
			}
		}


		/******************************************/
		.carousel-static
		{
			margin-top:-20px;            
		}

		.main-text
		{
			position: absolute;
			top: 50px;
			width: 96.66666666666666%;
			color: #FFF;
		}


		/*********************************************/
		.page-header
		{
			padding:0px 18px 0px 18px;
			border:none;
		}

		.page-header h2
		{
			color:#142D60;
		}

		.page-header small
		{
			color:#2E59D9;
		}

		.panel-icon
		{
			padding-bottom:30px;
		}
		.panel-icon img
		{
			width:30px;
		}

		.thumbnail {
			background:#F3F8FF;
			padding:15px 15px 0px 15px;
			position:relative;
			overflow:hidden;
			border:1px solid #84A9DA;
		}
		
		.thumbnail h4
		{
			font-weight:bold;
			color:#2E59D9;
		}

		.thumbnail button
		{
			border:1px solid #84A9DA;
			color:#4C84DB;
		}

		.thumbnail p
		{
			color:#2B559E;
		}

		.caption {
			position:absolute;
			top:-100%;
			right:0;
			background:rgba(94, 145, 223, 0.85);
			width:100%;
			height:100%;
			padding:2%;
			text-align:center;
			color:#fff !important;
			/* z-index:2;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out; */
		}

		.caption i
		{
			padding-top:60px;
			color:#fff;
		}

		.caption a
		{
			color:#fff;
			text-decoration:none;
		}

		.thumbnail:hover .caption {
			top:0%;
		}

		@media (min-width: 1200px)
		{
			.container {
				width: 1600px;
			}
		}


		/****************************************************************/
		.recomendados
		{
			background-color:#E9E9E9;
		}


		/******************************************************************/
		.panel-icon i
		{
			color:#016cf0;
		}
	</style>
</head>
<body>

	<!--Header con menu de navegacion-->
	<header>
	<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
			<div class="nav-header">
				<div class="nav-header-logo">
					<i class="fas fa-clone fa-4x"></i>
				</div>
				<div class="nav-header-text">
					<h1>Recomendaciones<br/> de Lectura</h1>
				</div>
			</div>
			<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form" role="search">
						<input type="text" class="form-control" placeholder="¿Buscas algo en particular?"></input>
						<button type="button" class="btn btn-primary btn-md">Buscar</button>
					</form>
					<li><a href="#">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><u>Recomendaciones</u></a>
					</li>
					<li><a href="#">Comités</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</div>    
		</nav>
	</header>    


	<!-- Imagen sin slider -->
	 <div class="carousel-static">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img src="https://dummyimage.com/1980x400/575757/e6e6ed.jpg" alt="First slide">
					</div>
				</div>
			<div class="main-text hidden-xs">
				<div class="col-md-12 text-center">
					<h1>
					Texto corto introductorio o de bienvenida. No más de trés<br/> 
					reglones para no hacer demasiado largo el párrafo y <br/>
					mantener el balance entre info textual y visual.
					</h1>
				</div>
			</div>
	   </div>

	
	<!-- Ultimas recomendaciones-->
	<div class="container">
			<div class="page-header">
				 <h2>Últimas Recomendaciones <a href="#"><small><u>Ver todas las recomendaciones</u></small></a></h2>
			</div>


		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del set de recomendaciones de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Comité:</strong> Nombre_del_comité_encargado </p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						 <img src="Resources\img\book.svg">
					</div>
			 </div>  
		</div> 

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del set de recomendaciones de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Comité:</strong> Nombre_del_comité_encargado </p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						 <img src="Resources\img\book.svg">
					</div>
			 </div>  
		</div> 

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del set de recomendaciones de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Comité:</strong> Nombre_del_comité_encargado </p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						 <img src="Resources\img\book.svg">
					</div>
			 </div>  
		</div> 

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del set de recomendaciones de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Comité:</strong> Nombre_del_comité_encargado </p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						 <img src="Resources\img\book.svg">
					</div>
			 </div>  
		</div> 

	</div>

</div>

   
	<!-- Slider con los ultimos libros recomendados -->
	<div class="recomendados">
	<div class="container">
		<div class="page-header">
			<h2>Últimos Libros Recomendados<a href="#"><small> <u>Ver todos los libros</u></small></a></h2>
		</div>
	</div>
	</div>
	<!-- Comite de destacados -->
	<div class="container">
			<div class="page-header">
				 <h2>Comités Destacados <a href="#"><small><u>Ver todos los comités</u></small></a></h2>
			</div>



		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del comité de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Etiqueta:</strong>Dato_de_la_etiqueta</p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						<i class="fas fa-users fa-2x"></i>
					</div>
			 </div>  
		</div> 


		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del comité de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Etiqueta:</strong>Dato_de_la_etiqueta</p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						<i class="fas fa-users fa-2x"></i>
					</div>
			 </div>  
		</div> 


		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del comité de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Etiqueta:</strong>Dato_de_la_etiqueta</p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						<i class="fas fa-users fa-2x"></i>
					</div>
			 </div>  
		</div> 

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
			<div class="thumbnail">
					<!-- Efecto Hover -->
					<div class="caption">
						<h4><a href="#"><i class="far fa-eye fa-1x"></i> Ver</a></h4>
					</div>
					<!-- fin efecto hover -->
					 <h4>Título del comité de uno hasta tres reglones en la vista previa del set. </h4>
					<p><strong>Etiqueta:</strong>Dato_de_la_etiqueta</p>
					<button class="btn btn-default pull-left" role="button"><strong>Año:</strong> 2015</button>   
					<div class="panel-icon pull-right">
						<i class="fas fa-users fa-2x"></i>
					</div>
			 </div>  
		</div> 

	</div>


	<!-- botones redes sociales -->

	<!-- Footer -->

   <!-- scripts -->
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="bower_components/components-bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 
