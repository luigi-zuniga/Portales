<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Comités - Portal de Recomendaciones</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans"/>
	<link rel="stylesheet" href="../../bower_components/components-bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="../../Resources/styles/navprl.css"/>
	<link rel="stylesheet" href="../../Resources/styles/recomendacionesStyles.css" />
	<link rel="stylesheet" href="../../Resources/styles/footerprl.css"/>

	
	<link rel="apple-touch-icon" sizes="57x57" href="/Portales/Resources/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/Portales/Resources/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/Portales/Resources/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/Portales/Resources/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/Portales/Resources/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/Portales/Resources/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/Portales/Resources/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/Portales/Resources/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/Portales/Resources/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/Portales/Resources/faviconandroid-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/Portales/Resources/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/Portales/Resources/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/Portales/Resources/favicon/favicon-16x16.png">
	<link rel="manifest" href="/Portales/Resources/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/Portales/Resources/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<?php
		include("../Home/navegation.php");
	?>

	<header id="header-comite">
		<div class="container">
			<?php
				include("com_Header.php");
			?>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<?php
				include("com_Busqueda.php");   
				include("com_Lista.php");
			?>
		</div>
	</div>
	
	<div class="container-fluid">
	<div class="row">
		<?php
			include("../Home/footer.php");
		?>
	</div>
	</div>

   <!-- scripts -->
	<script type="text/javascript" src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="../../bower_components/components-bootstrap/js/bootstrap.min.js"></script>	
</body>
</html> 
