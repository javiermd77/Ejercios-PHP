<!DOCTYPE html> <html lang="es"> 
<head> 
	<meta charset="UTF-8"></meta> 
	<title>Gestión Formulario</title> 	
	<meta name="description" content="">
	<!-- Ver la página al 100% indpendiente de como lo tenga predefinido el usuario en su navegador -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Libreria que inicializa y normaliza los estilos en cascada de todos los navegadores. -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Cargar estilos en cascada de bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/yeti/bootstrap.min.css">
</head> 

<body class="container"> 
	<!-- Cuerpo de la web-->
	<?php include("includes/header.php"); ?>
	<p>Hola Javier.</p>
	<br/>
	<button onclick='history.back()'>Regresar</button>
	<?php include("includes/footer.php"); ?>
</body>
</html>