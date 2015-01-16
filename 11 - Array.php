<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Array Clase</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<!-- Sentencias de Control -->
	<h1>Array de la clase</h1>
	<?php
		$fila1=array("Alvaro","Cristina","Cristina","Eva");
		$fila2=array("Javier","Vero","Angela","Rosa");
		// Array asociativa
		$fila3=array('nombre1'=>"Cesar",'nombre2'=>"Pedro",'nombre3'=>"Ismael");
		$fila4=["Juan Carlos","David","Alberto","Maria Jose"];
		
		echo "<h1>Fila 1:</h1>";
		for($i=0;$i<count($fila1);$i++){
			echo $fila1[$i];
			echo "<br/>";
		}
		echo "<h1>Fila 2:</h1>";
		for($i=0;$i<count($fila2);$i++){
			echo $fila2[$i];
			echo "<br/>";
		}
		echo "<h1>Fila 3:</h1>";
		
		foreach ($fila3 as $indice => $valor){
			echo $indice.". ".$valor."<br/>";
		}
			
		echo "<h1>Fila 4:</h1>";
		for($i=0;$i<count($fila4);$i++){
			echo ($i+1).". ".$fila4[$i];
			echo "<br/>";
		}
		
		$clase=[$fila1,$fila2,$fila3,$fila4];
		echo "<br/>Visualizar elemento matriz multidimensional: <br/>";
		echo $clase[1][3];
		echo "<br/><br/>";
		
		foreach($clase as $fila => $valor){
			foreach($valor as $i => $v){
				echo $fila.".".$i.". ".$v."<br/>";
			}
		}
		
		var_dump($clase);		
		
		print_r($clase);
		print_r($fila2);
		
?>
</body>
</html>