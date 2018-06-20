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
	<link rel="stylesheet" href="Resources/styles/homeStyles.css">
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php
		include("Views/navegation.php");
		include("Views/slider.php");
	?>

		<section id="comite">
			<div class="container">
				<?php
					include("Views/comite.php");
				?>
			</div>
		</section>

		<section id="books-galery" class=" bg-light-gray">
				<?php
					include("Views/carouselBooks.php");
				?>
		</section>

		<section id="comiteDestacado">
			<div class="container">
				<?php
					include("Views/comiteDestacado.php");
				?>
			</div>
		<section>

	<div class="row">
	<?php
		include("Views/footer.php");
	?>
	</div>

   <!-- scripts -->
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="bower_components/components-bootstrap/js/bootstrap.min.js"></script>	
</body>
</html> 
