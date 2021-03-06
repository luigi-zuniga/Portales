<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Descripción ejemplar - Recomendaciones de Lectura</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="../../bower_components/components-bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../../Resources/styles/navprl.css"/>
    <link rel="stylesheet" href="../../Resources/styles/librosStyles.css" />
	<link rel="stylesheet" href="../../Resources/styles/footerprl.css"/>
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
				include("ejem_desc_header.php");
			?>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<?php
				include("ejem_desc_container.php");
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
