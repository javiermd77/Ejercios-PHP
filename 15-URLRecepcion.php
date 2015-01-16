<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Recepcion URL Variables</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<h1>Recepcion URL Variables</h1>
	
	<?php
$rec_idiomaES=<<<Idioma_ES
	<h2>Bienvenido a mi web</h2>
	<p> Esta página está escrita en español. </p>
Idioma_ES;

$rec_idiomaEN=<<<Idioma_EN
	<h2>Wellcome to my web:</h2>
	<p> This page is write in english. </p>
Idioma_EN;

$rec_idiomaFR=<<<Idioma_FR
	<h2>Bienvenue sur mon site:</h2>
	<p> Cette page est écrite en français.</p>
Idioma_FR;

$rec_idiomaDE=<<<Idioma_DE
	<h2>Willkommen auf meiner Website:</h2>
	<p> Diese Seite wird in deutscher Sprache verfasst.</p>
Idioma_DE;


	$var_idioma=$_GET['idioma'];
	
		switch($var_idioma){
			case 'espanol':
				echo $rec_idiomaES;
				break;
			case 'english':
				echo $rec_idiomaEN;
				break;
			case 'francais':
				echo $rec_idiomaFR;
				break;
			case 'deutch':
				echo $rec_idiomaDE;
				break;
			default:
				echo "Entrada en el sitio de manera incorrecta.";
		}
	?>
</body>
</html>