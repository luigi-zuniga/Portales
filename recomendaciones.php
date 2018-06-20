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
    <link rel="stylesheet" href="Resources/styles/recomendacionesStyles.css" />
</head>
<body>

	<?php
		include("Views/navegation.php");
        include("Views/Recomendaciones/recom_Header.php");
	?>

     <div class="container">
		 <div class="row">
         <?php
			 include("Views/Recomendaciones/recom_Busqueda.php");   
			 include("Views/Recomendaciones/recom_Lista.php");
		 ?>
		 </div>
    </div>

    <?php
    	include("Views/footer.php");
    ?>

   <!-- scripts -->
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="bower_components/components-bootstrap/js/bootstrap.min.js"></script>	
</body>
</html> 
