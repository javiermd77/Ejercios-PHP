<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Calculadora</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->

	<form name="Formulario" method="GET" action="12b - Solicitar Radio.php">
			<label for="radio">Radio Círculo:</label>
			<input type="number" name="radio" id="radio" maxlength="7" />
			<input type="button" name="boton" id="boton" value="Calcular" onclick="cal_datos();"/>
			<br/><label id="perimetro"></label>
			<br/><label id="area"></label>
	</form>
	<script type="text/javascript">
		function cal_datos(){
			var radio=document.getElementById("radio").value;
			var resultado=document.getElementById("perimetro");
			var campo_area=document.getElementById("area");
			var perimetro = 2*3.141628*radio;
			var area=3.141628*radio*radio;
			resultado.innerHTML="Perimetro: "+perimetro;
			campo_area.innerHTML="Area: "+area;			
		}
	</script>	
	
	
</body>
</html>