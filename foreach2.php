





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
			'noviembre',
			'diciembre'
		);	
?>

<html>
	<head>
		<title>
			MESES DEL YEAR
		</title>

		<body>
			<h1> MESES DEL ANIO </h1>

			<ul>
				<?php
					foreach($meses as $mes) {


						echo '<li>'.$mes.'</li>';

					}

				?>



			</ul>


		</body>


	</head>
</html>
