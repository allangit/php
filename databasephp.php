





<html>
	<head>
		<title>	Sistema de bases de datos
		</title>
	
	<body>
		<?php


		$mysqli= new mysqli("localhost","root","","informacion");		
		if($mysqli===false) {

			die("Error no se puede conectar". $mysqli->connect_error);

		}

		$sql="CREATE TABLE person(
					id int not null primary key auto_increment,
					firs_name varchar(200),
					second_name varchar(200),
					email varchar(200)

			)";
				
			if($mysqli->query($sql)){

				echo " La base de datos a sido creada";

			}

			else {
				echo "No se creo la base de datos $sql." .$mysqli->error;

			}

				$mysqli->close();

		?>
	</body>


</html>

