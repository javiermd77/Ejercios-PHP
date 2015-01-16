<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title></title>
	<meta charset="UTF-8"></meta> 
	<link rel="stylesheet" href="css/CodeCSS.css" type="text/css">
	<script type="text/javascript" src="js/codeJS.js"></script>
</head>
<body>
	<!-- Sentencias de Control -->
	<?php
		$hora=date("H");
		if ($hora<12){
			echo "Buenos días.<br/>";
		}elseif($hora<20){
			echo "Buenas tardes.<br/>";
		}else{
			echo "Buenas noches.<br/>";
		}
?>
	<?php
		$dia=date("w");
		
		switch ($dia){	
			case 1:
				echo "Hoy es lunes.";
				break;
			case 2:
				echo "Hoy es martes.";
				break;
			case 3:
				echo "Hoy es miercoles.";
				break;
			case 4:
				echo "Hoy es jueves.";
				break;
			case 5:
				echo "Hoy es viernes.";
				break;
			case 6:
				echo "Hoy es sábado.";
				break;
			default:
				echo "Hoy es domingo.";
				break;
		}
?>
	<form name="Formulario" method="GET" action="06 - Escribir Tabla.php">
		<label for="numero"></label>
		<input type="text" name="numero" id="numero" maxlength="30" />
		<input type="submit" name="boton" id="boton" value="Calcular" />
	</form>
</body>
</html>