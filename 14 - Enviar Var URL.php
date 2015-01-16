<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Enviar por URL</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<!--<h1>Enviar Variables por GET/POST</h1>
	<form action="14 - Procesar.php" method="GET">
		<input type="text" name="nombre" id="nombre" maxlenght="15" placeholder="Escribe tu nombre">
		<button type="submit">Enviar</button>
	</form>
	<br/>	-->
	
	<h1>Enviar Variables por URL</h1>
	<!-- Envío por URL. -->
	<a href='14 - Procesar.php' class="btn btn-primary btn-lg">Sin variables</a>
	<a href='14 - Procesar.php?nombre=jose' class="btn btn-primary btn-lg">Jose</a>
	<a href='14 - Procesar.php?nombre=luis' class="btn btn-primary btn-lg">Luis</a>
</body>
</html>