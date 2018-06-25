<!--Header con menu de navegacion-->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="container">
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<div class="nav-header">
					<a href="/Portales/">
					<div class="nav-header-logo">
						<img class="img-responsive" src="/Portales/Resources/img/logo.png" alt="" width="30%"/>
					</div>
					<div class="nav-header-text">
						<h1>Recomendaciones<br/> de Lectura</h1>
					</div>
					</a>
				</div>
				<ul class="nav navbar-nav">
					<form class="navbar-form" role="search" action="/Portales/Views/Recomendaciones/recom_list_busq.php?">
							<input type="text" class="form-control" placeholder="¿Buscas algo en particular?" />
							<button type="submit" class="btn btn-primary btn-sm">Buscar</button>
						</form>
					<li><a href="/Portales/">Inicio</a></li>
					<li><a href="/Portales/Views/Recomendaciones/recomendaciones.php"><u>Recomendaciones</u></a></li>
					<li><a href="/Portales/Views/Comites/comite.php">Comités</a></li>
					<li><a href="/Portales/Views/Comites/contacto.php">Contacto</a></li>
				</ul>
			</div>    
		</div>
	</nav>

