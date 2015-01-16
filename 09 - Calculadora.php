<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Calculadora</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<form name="Formulario" method="GET" action="09 - Validar.php">
			<label for="num1"></label>
			<input type="number" name="num1" id="num1" maxlength="30" />
			<label for="num2"></label>
			<input type="number" name="num2" id="num2" maxlength="30" />
			
			<select name="Operacion" id="Operacion">
				<option value="nulo" selected=""></option>
				<option value="sum">Sumar</option>
				<option value="res">Restar</option>
				<option value="mul">Multiplicar</option>
				<option value="div">Dividir</option>
				<option value="mod">Modulo</option>
			</select>
			
			<input type="submit" name="boton" id="boton" value="Calcular" />
	</form>

</body>
</html>