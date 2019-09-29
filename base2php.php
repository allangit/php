







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

		if( isset($_POST['Submit']) ){

			$firs_name=$_POST['firs_name'];
			$second_name=$_POST['second_name'];
			$email=$_POST['email'];
		}

		$sql="INSERT INTO person(firs_name, second_name, email) values('$firs_name','$second_name','$email')";

	
			if($mysqli->query($sql)===true){

				echo " La base de datos a sido creada";

			}

			else {
				echo "No se creo la base de datos $sql." .$mysqli->error;

			}

				$mysqli->close();

		?>
	</body>

</head>


</html>
