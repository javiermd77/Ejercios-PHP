<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Imagen Aleatoria</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<h1>Imagen Aleatoria</h1>
	<?php
		$num=rand(1,3);
		
		if ($num==1){
			$name_img="Lince.jpg";
		}elseif($num==2){
			$name_img="Leopardo.jpg";
		}else{
			$name_img="Tigre.jpg";
		}
?>
	<img width="200px" src="imagenes/<?php echo $name_img ?>"/>
</body>
</html>