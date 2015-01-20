<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Formulario POST</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<?php 
/*	Usando funciones PHP para strings

Teniendo en cuenta las siguientes funciones para strings y arrays en PHP Ejecutar en un archivo php órdenes que realicen las tareas indicadas:

Dado el siguiente string:

"PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre."

    Realizar las siguientes tareas:
    Adivinar el número de palabras que tiene.
    Si es superior a 100 caracteres crear un substring que lo corte y añadir unos puntos suspensivos
    Invertir
    Sustituir la palabra 'PHP' por la palabra 'Ruby' y poner en mayúsculas la palabra libre
    Limitar el párrafo a cuatro palabras*/
	
		$contenido="PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.";
		echo "<p>Contenido: $contenido</p>";
		$num_palabras=str_word_count($contenido);
		echo "<p>Número de palabras del texto: $num_palabras </p>";
		$num_letras=strlen($contenido);
		echo "<p>Número de letras del texto: $num_letras </p>";
		if ($num_letras>100){
			$cad_corta=substr($contenido,0,100);
			echo "Escribir primeras 100 letras: $cad_corta ...</p>";
		}
		$cad_invertida=strrev($contenido);
		echo "<p>Cadena invertida: $cad_invertida </p>";
		$cad_sustituir=str_replace("PHP","Ruby",$contenido);
		$cad_sustituir=str_replace("libre","LIBRE",$cad_sustituir);
		echo "<p>Cadena sustituida: $cad_sustituir </p>";
		$array=explode(" ",$contenido);
		$array_corte=array_slice($array,0,4);
		$array_union=implode(" ",$array_corte);
		echo "<p>Contenido con 4 palabras: $array_union </p>";
	
		
	?>
</body>
</html>

