<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Calcular Area</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<h1>Calcular Area</h1>
	<?php
		const pi=3.141628;
		$radio = $_GET["radio"];

		define ("txt_area","El área del círculo calculado es: ",true);
		define ("txt_perim","El perímetro del círculo calculado es: ",true);
		$cal_area = pi*$radio*$radio;
		$cal_perim = 2*pi*$radio;
		
		echo txt_area.$cal_area;
		echo "<br/>";
		echo txt_perim.$cal_perim;
?>
</body>
</html>