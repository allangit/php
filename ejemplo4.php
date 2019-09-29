<html>
	<head>

		<title>
			definicion de variables

		</title>


	<body>

		<?php

		$nombre="Este es mi primer programar en php";
		$account=785;
		$couta=323.5435;


		echo $nombre;
		echo "<br>";
		echo $account;
		echo"<br>";
		echo $couta;
		echo "<br>";

		?>


		<?php

			class car{

				function car() {

					$this->model="BMW";


				}
			}


			$datos=new car();
			echo $datos->model;

		?>

	</body>

	</head>

</html>
