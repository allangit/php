




<?php

	$mysqli= new mysqli("localhost","root","","informacion");


	if($mysqli->connect_error) {

		die("error".$mysqli->connect_error);

	}
	else {

		printf("Conexion informacion:%s\n",$mysqli->server_info);


	}

	

	$sql=array("CREATE TABLE circuito(
					id int not null primary key auto_increment,
					first_name varchar(200),
					second_name varchar(200),
					email varchar(200)

		)");

	echo " CREANDO LA BASE DE DATOS EN PHP";


	if( $mysqli->query($sql[$i]) ) {


			echo "conectando a la base de datos... tabla creada.....";
		}

	
	
	else{


		echo "No se creo la base de datos $sql." .$mysqli->error;

	}

	$dato1="";


	echo "INSERTANDO VALORES A LA TABLA CIRCUITO";

	for($i=0 ; $i <3; $i++) {


		$sql2="insert into circuito (first_name,second_name,email) values('paralelo','serie','dess')");

	
		if( $mysqli->query($sql[$i]) ) {


			echo "conectando a la base de datos... tabla creada.....";
		}

	
	
		else{


			echo "No se creo la base de datos $sql." .$mysqli->error;

		}

	}

	$mysqli->close();





?>
