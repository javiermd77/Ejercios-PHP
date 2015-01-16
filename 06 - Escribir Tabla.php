<!DOCTYPE html> 
<html lang="es"> 
<head> 
	<title></title>
	<meta charset="UTF-8"></meta> 
	<link rel="stylesheet" href="css/CodeCSS.css" type="text/css">
	<script type="text/javascript" src="js/codeJS.js"></script>
</head>
<body>
	<!-- Sentencias de Control -->

	<?php
		$num=$_GET['numero'];
		for($i=0;$i<=10;$i++){
			echo "$num * $i = ".$num*$i."<br/>";
		}
?>
</body>
</html>