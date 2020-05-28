<?php 
require 'recibe.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tarea 02</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-3">
		<h2>Tarea 02</h2>
		<p>Cambio de pesos!</p>
		<form method="POST">
			<div class="form-group">
				<label for="Base">Para: </label>
				<input type="text" class="form-control" placeholder="para" name="para">
			</div>
			<div class="form-group">
				<label for="Base">De: </label>
    			<input type="text" class="form-control" placeholder="de" name="de">
			</div>
      		<button type="submit" name="submit" class="btn btn-primary sm-2">Calcular</button>
			<br>
			<div class="form-row">
				<div class="col">
					<label for="base" class="mr-sm-2">Monto:</label>
					<input type="text" class="form-control" placeholder="Monto " name="monto">
				</div>
				<div class="col">
					<label for="clp" class="mr-sm-2">total: </label>
   					<input type="text" class="form-control" placeholder="<?php echo $total;?>" name="clp" disabled>
     			</div>
			</div>
		</form>
	</div>
</body>
</html>
