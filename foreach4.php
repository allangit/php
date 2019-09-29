<?php
	$meses=array(
			'enero',
			'febrero',
			'marzo',
			'abril',
			'mayo',
			'junio',
			'julio',
			'agosto',
			'septiembre',
			'octubre',
			'noviembre',
			'diciembre'

		);
?>

<?php
	$datos=array( 'id'=>5033080285,'pais'=>'Costa Rica','profesion'=>'ing informatica');

?>

<html>
	<head>
		<title>Sistema de meses</title>

		<body>
			<h1>MESES DEL AÑO </h1>
			<ul>
				<?php
					foreach($meses as $mes) {
					
						echo '<h1>'. $mes .'</h1>';

					}

					foreach($datos as $data =>$valor) {
					
						echo '<h1>'. $valor .'</h1>';

					}
		

				?>

			</ul>	

		
		</body>

	</head>

</html
