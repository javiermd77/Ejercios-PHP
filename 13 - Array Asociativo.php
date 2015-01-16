<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Array Asociativo</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<!-- 
			+#Crear un array asociativo de la clase
			+* cada alumno tenga los siguientes pares de clave valor:
			+  nombre, apellidos,email, estudios, poblacion;
			+* Si desconocemos un valor, pondremos espacio vacío
			+* Imprimir los valores de un alumno determinado
			+* Imprimir el array completo mediante el bucle foreach en una tabla html
	-->
	<!--
		* crea dos arrays
		* uno de lenguajes de servidor
		* Otro de lenguajes cliente
		* Concatenalos e imprímelos en html mediante una lista ordenada
	-->
	<h1>Array Asociativo</h1>
	<table border=2px>
		<caption>Tabla de la Clase</caption>
		<tr><th>Clave</th><th>Valor</th></tr>
		<tr>
			<?php
				$persona=array('Nombre'=>"Javier",'Apellidos'=>"Molero Díaz",'Email'=>"javier@gmail.com",'Estudios'=>"Tecn. Superior",'Poblacion'=>"Toledo");
				foreach($persona as $clave => $valor){
					echo "<tr><td>$clave</td><td>$valor</td></tr>";
				}
			?>	
		</tr>
	</table>
	
	<ol>Lenguajes:
		<li>Lenguajes en el lado Cliente:</li>
			<ol>
				<?php
					$cliente=array("HTML","JavaScript","CSS");
					for($i=0;$i<count($cliente);$i++){
						echo "<li>$cliente[$i]</li>";
					}
				?>
			</ol>
		<li>Lenguajes en el lado Servidor:</li>
			<ol>
				<?php
					$servidor=array("ASP","JSP","PHP");
					for($i=0;$i<count($servidor);$i++){
						echo "<li>$servidor[$i]</li>";
					}
				?>
			</ol>
	</ol>
</body>
</html>