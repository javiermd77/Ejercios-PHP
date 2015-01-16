<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Tipos Datos Variables</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<?php
		$cadena="Esto es una cadena de texto";
		$entero=27;
		$decimal=21.5;
		$booleano=false;
		$vector=array("Circulo","Cuadrado","Triangulo");
		$nulo=NULL;
		const pi=3.141628;
		
		var_dump($cadena);
		var_dump($entero);
		var_dump($decimal);
		var_dump($booleano);
		var_dump($vector);
		var_dump($nulo);
		var_dump(pi);
		echo "Pi vale: ".pi;
?>
</body>
</html>