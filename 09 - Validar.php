<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Calculadora</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<?php
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		$opera=$_GET['Operacion'];
		
		switch ($opera){	
			case "nulo":
				echo "No has seleccionado ningún operador.";
				break;
			case "sum":
				$resultado=$num1+$num2;
				echo "Resultado $num1 + $num2: ".$resultado;
				break;
			case "res":
				$resultado=$num1-$num2;
				echo "Resultado $num1 - $num2: ".$resultado;
				break;
			case "mul":
				$resultado=$num1*$num2;
				echo "Resultado $num1 * $num2: ".$resultado;
				break;
			case "div":
				$resultado=$num1/$num2;
				echo "Resultado $num1 / $num2: ".$resultado;
				break;
			case "mod":
				$resultado=$num1%$num2;
				echo "Resultado $num1 % $num2: ".$resultado;
				break;
			default:
				echo "Ha ocurrido un error al seleccionar.<br/>";
				break;
		}
?>
	<br/><br/>
	<button onclick='history.back()'>Regresar</button>
</body>
</html>