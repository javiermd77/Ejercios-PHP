<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Formulario Procesado en misma Pagina</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<h1>Formulario POST</h1>
	<form name="FormPost" method="POST"  action="<?php $_SERVER['PHP_SELF']; ?>">
		<label for="usuario">Nombre: </label><br/>
		<input type="text" name="usuario" placeholder="Escribe el usuario"/>
		<br/>
		<label for="contrasena">Contraseña: </label><br/>
		<input type="password" name="contrasena"/>
		<br/>
		<label for="repetir">Repetir Contraseña: </label><br/>
		<input type="password" name="repetir"/>
		<br/>
		<input type="submit" value="Enviar"/>
	</form>
	
	<?php
		if (isset($_POST["contrasena"]) && isset($_POST["repetir"]) && isset($_POST["usuario"])){
			$contra = $_POST["contrasena"];
			$repetir = $_POST["repetir"];
			if ($contra==$repetir){
				echo "<p>Las constaseñas son iguales.</p>";
			}else{
				echo "<p>Las constaseñas NO son iguales.</p>";
			}
		}	
	?>
</body>
</html>