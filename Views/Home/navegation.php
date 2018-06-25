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
					<div class="nav-header-logo">
						<i class="fas fa-clone fa-4x"></i>
					</div>
					<div class="nav-header-text">
						<h1>Recomendaciones<br/> de Lectura</h1>
					</div>
				</div>
				<ul class="nav navbar-nav">
					<form class="navbar-form" role="search" action="Views/Home/home_list_bus.php">
							<input type="text" class="form-control" placeholder="¿Buscas algo en particular?" />
							<button type="submit" class="btn btn-primary btn-sm">Buscar</button>
						</form>
					<li><a href="#">Inicio</a></li>
					<li><a href="#"><u>Recomendaciones</u></a></li>
					<li><a href="#">Comités</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</div>    
		</div>
	</nav>

