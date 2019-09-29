<html>
	<head>

		<body>

		<?php

			$opcion=2;
			for ($opcion=0; $opcion <10; $opcion++){

				switch($opcion) {


					case 1:
						echo "el numero ingresado es 1";
						echo "<br>";
						break;

					case 2:
						echo "El numero ingresado es 2";
						echo "<br>";
						break;

					case 3:

						echo "El numero ingresado es 3";
						echo "<br>";
						break;

					default:

						echo "ingreso otro numero";
						echo "<br>";

				}
			}
		?>

		</body>

	</head>
</html>
