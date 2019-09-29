<html>
	<head>
		<body>
			<title>
				usando funciones
			</title>

		<?php

			function suma($dato1,$dato2) {

				$suma=$dato1+$dato2;
				echo "La suma es::",$suma;
				echo "<br>";
			}
			suma(3,4);
		?>


		<?php

			function cubo($x) {


				return $x*$x*$x;

			}


			echo " la operaciones ::",cubo(9);
			echo "<br>";
		?>

		</body>


	</head>

</html>
