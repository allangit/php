
<html>
	<head>
		<title> BIENVENIDOS ESTE ES LE PRIMER FORMULARIO</title>
	
		<body>
			<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
			<link rel="stylesheet"  href="estilos.css"> 
			<div class="wrap">

				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="">
					<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="">
					<br>
					<textarea name="Mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"> </textarea>
					<input type="submit" name="submit" class="btn btn-primary" value="Enviar datos">

				</form> 
					
				
		</body>
	</head>


</html>
