<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Recepcion por URL</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<!-- <h1>Recepcion	Variables por GET/POST</h1> -->
	// <?php
		 // echo "Nombre: ".$_GET('nombre');
	// ?>
	
	<h2>Recepción de datos por url</h2>
	<?php

$bio1 =<<<BIO1
	<h3>me llamo jose</h3>
	<ul>
	<li>vivo en Torrejón</li>
	<li>soy músico</li>
	<li>tengo 32 años</li>
	</ul>
BIO1;
$bio2 =<<<BIO2
	<h3>me llamo Luis</h3>
	<ul>
	<li>vivo en Londres</li>
	<li>soy pintor</li>
	<li>tengo 36 años</li>
	</ul>
BIO2;
	
	$nombre='';
	if(empty($_GET['nombre'])){
		echo'';
	}else{
		$nombre=$_GET['nombre'];		
		if($nombre=='jose')echo $bio1;
		if($nombre=='luis')echo $bio2;
	}
	var_dump($nombre);	
	?>
	
</body>
</html>