<!DOCTYPE html> <html lang="es"> 
<head> 
	<meta charset="UTF-8"></meta> 
	<title>Formulario Básico</title> 	
	<meta name="description" content="">
	<!-- Ver la página al 100% indpendiente de como lo tenga predefinido el usuario en su navegador -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Libreria que inicializa y normaliza los estilos en cascada de todos los navegadores. -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Cargar estilos en cascada de bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/yeti/bootstrap.min.css">
</head> 

<body class="container"> 
	<!-- Cuerpo de la web-->
	<?php include("includes/header.php") ?>
	<form class="form-horizontal" method="POST" action="05 - ges_form.php">
	  <fieldset>
	    <legend>Formulario Básico: </legend>
	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input class="form-control" name="email" placeholder="Email" type="text">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
	      <div class="col-lg-10">
	        <input class="form-control" name="contrasena" placeholder="Password" type="password">
	        <div class="checkbox">
	          <label>
	            <input type="checkbox"> Checkbox
	          </label>
	        </div>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
	      <div class="col-lg-10">
	        <textarea class="form-control" rows="3" id="textArea"></textarea>
	        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="col-lg-2 control-label">Radios</label>
	      <div class="col-lg-10">
	        <div class="radio">
	          <label>
	            <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
	            Option one is this
	          </label>
	        </div>
	        <div class="radio">
	          <label>
	            <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
	            Option two can be something else
	          </label>
	        </div>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="select" class="col-lg-2 control-label">Selects</label>
	      <div class="col-lg-10">
	        <select class="form-control" id="select">
	          <option>1</option>
	          <option>2</option>
	          <option>3</option>
	          <option>4</option>
	          <option>5</option>
	        </select>
	        <br>
	        <select multiple="" class="form-control">
	          <option>1</option>
	          <option>2</option>
	          <option>3</option>
	          <option>4</option>
	          <option>5</option>
	        </select>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
	
	<?php include("includes/footer.php") ?>
</body>
</html>