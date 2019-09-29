




<?php
	if($_POST) {

		echo $_POST['nombre'];

	}
?>






<html>
	<head>
		<title> Enviandos archivos en php </title>

		<body>
			<h1> Este es el formulario de entrada </h1>

			<form action="recibe.php" method="post">

				<input type="text" placeholder=Nombre: name="nombre">
				<br>
				<input type="text" placeholder=cedula: name="cedula">
				<br>
				<input type="text" placeholder=Pais: name="pais">
				<br>
				<label for="hombre">Hombre</label>
				<input type="radio" name="sexo" value="hombre" id="hombre">
				<label for="mujer">Mujer</label>
				<input type="radio" name="sexo" value="mujer" id="mujer">
				
				<select name="year" id="year">

					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
	
				</select>

				<br>

				<label for="terminos">Aceptas las condiciones</label>
				<input type="checkbox" name="terminos" id="terminos" value="ok">
				<br>
				<input type="submit" value="Enviar">
				
				
				



			</form>
			

		</body>

	</head>


</html>
