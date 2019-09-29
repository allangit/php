


<?php

	$mysqli=new mysqli("localhost","root","","control");

	
	if ($mysqli->connect_errno){


		die("Error al conectar a la base de datos");
		exit();

	}
	else {


	$dato1=34.6;
	$kp_i=4.5;
	$kd_i=4.8;
	$ki_i=7.8;

	$kp_v=3.5;
	$kd_v=3.8;
	$ki_v=3.8;

	$kp_t=4.5;
	$kd_t=4.8;
	$ki_t=7.8;

	$kp_f=3.5;
	$kd_f=3.8;
	$ki_f=3.8;


	$kp_p=3.5;
	$kd_p=3.8;
	$ki_p=300.8;

	$sql=array("drop database control","create database if not exists control","use control","create table pid(sensores int not null primary key auto_increment, 
		variables varchar(100),datos float, kp float, ki float, kd float)","create table sensort(id int not null primary key auto_increment,medidas float)","show tables", "insert into pid  	           			(variables,datos,kp,ki,kd)  values ('corriente',$dato1,$kp_i,$kd_i,$ki_i),('temperatura',$dato1,$kp_i,$kd_i,$ki_i),('voltaje',$dato1,$kp_v,$kd_v,$ki_v),('presion',$dato1,$kp_p,$kd_p,$ki_p)");

	
	
	for ($i=0 ;$i<7; $i++) {

	
		if($mysqli->query($sql[$i])) {


			echo "Creando la base la base de datos.....";
			printf ("\n");

		}

		else {


			echo "No se creo la base de datos".$mysqli->error;

		}
	echo '<br>';

	}

	
	$resultados=$mysqli->query('select *from pid');
	echo "variables"."--"."kp"."--"."ki"."--"."kd".'</br>'.'</br>';
	while ($file=$resultados->fetch_assoc()) {

		

		echo $file["variables"]."--".$file["kp"]."--".$file["ki"]."--".$file["kd"].'</br>';

	
	}

}

	$mysqli->close();

?>
