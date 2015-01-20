<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Formulario POST</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<h1>Formulario POST</h1>
	<form name="FormPost" method="POST" action="16 - Recepcion Form.php">
		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre" placeholder="Escribe el nombre de usuario"/>
		<br/>
		<label for="Fecha_Nacim">Fecha Nacimiento: </label>
		<input type="date" name="Fecha_Nacim" placeholder="1900-01-01"/>
		<br/>
		
		<label for="Sexo">Sexo: </label>
		<select name="Sexo" id="Sexo">
			<optgroup label="Sexo">
			<option value="H" selected="selected">Hombre</option>
			<option value="M">Mujer</option>
			</optgroup>
		</select>
		<br/>
		
		<label for="Estudios">Estudios: </label><br/>
		<input type="radio" name="Estudios" id="Estudios" value="1" checked="checked" /><label>1 - No tiene estudios</label><br/>
		<input type="radio" name="Estudios" id="Estudios" value="2"/><label>2 - Estudios Primarios</label><br/>
		<input type="radio" name="Estudios" id="Estudios" value="3"/><label>3 - Estudios Secundarios</label><br/>
		
		<input type="checkbox" name="Informacion" id="Informacion" checked="checked" /><label>Quiero reicibir información periódicamente.</label><br/>
		<input type="checkbox" name="Condiciones" id="Condiciones" value="S"/><label>Acepto las condiciones del servicio."</label><br/>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>