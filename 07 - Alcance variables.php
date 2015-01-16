<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Variables locales y globales</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<h1>Variables locales y globales</h1>
	<?php
		$x = 5; // alcance global
		
		function miTest() {
			// si usamos x dentro de esta función se generará un error
			echo "<p>La variable x dentro de esta función es: $x</p>";
		}
		
		miTest();
		
		echo "<p>La variable x fuera de la función tiene un valor: $x</p>";// esta saldrá bien
		
	?>
	<?php
		//$x = 5; // alcance global
		
		function miTest2() {
			$y=7;
			echo "<p>La variable x dentro de esta función es: $y</p>";
		}
		
		miTest2();
		echo "<p>La variable y fuera de la función tiene un valor: $y</p>";// esta saldrá mal porque no tiene definida la variable global.
	?>
	
	<?php
		$a = 5;
		$b = 10;
		function myTest() {
			global $a, $b;
			$b = $a + $b;	
			echo $b."<br/>";
		}
		myTest();
		echo $b."<br/>"; // outputs 15
	?>
	
	<?php
		function miTest3() {
			static $c = 0;
			echo $c."<br/>";
			$c++;
		}
		miTest3();
		miTest3();
		miTest3();
	?>																	
	
</body>
</html>