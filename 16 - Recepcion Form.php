<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title>Imagen Aleatoria</title>
	<meta charset="UTF-8"></meta> 
</head>
<body>
	<?PHP
	$name=$_POST["nombre"];
	$birth=$_POST["Fecha_Nacim"];
	$manwo=$_POST["Sexo"];
	$estudios=$_POST["Estudios"];
	$fch_nac=$_POST["Fecha_Nacim"];
	
	if (isset($_POST["Informacion"])){
		$info=$_POST["Informacion"];
	}
	if (isset($_POST["Condiciones"])){
		$condicion=$_POST["Condiciones"];
	}
	if (isset($condicion)){

		$segundos=strtotime('now') - strtotime($fch_nac);
		$diferencia_dias=intval($segundos/60/60/24/365);
		
		$fecha = explode('-',$fch_nac);
		$anho=$fecha[0];
		$mes=$fecha[1];
		$dia=$fecha[2];
		echo "Dia: $dia / Mes: $mes / Año: $anho";
		
		if ($manwo=="H"){
			echo "<h1>Hola, querido amigo, $name</h1>";
		}	
		else{
			echo "<h1>Hola, querida amiga, $name</h1>";
		}
		
		switch("$estudios"){
			case 1:
				echo "<p>No posee estudios.</p>";
				break;
			case 2:
				echo "<p>Posee estudios primarios.</p>";
				break;
			case 3:
				echo "<p>Posee estudios secundarios.</p>";
				break;
			default:
				echo "Error al mostrar estudios";
		}
		
		echo "<p>Tienes $diferencia_dias años.<p>";
		
		if (isset($info)){
			if ($info=="on"){
				echo "<p>Los cursos que disponemos en estos momentos son:</p>";
				echo "<ul>Lista de Cursos:";
				echo "<li> Desarrollo Web</li>";
				echo "</ul>";
			}
		}
	}
	else{
		echo "<p>Debe de aceptar las condiciones si quiere continuar.</p>";
	}
	
?>
	<button onclick='history.back()'>Go Back!!!</button>
</body>
</html>