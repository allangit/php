<html>
	<head>
		<title>
			matrices
		</title>

		<body>
			<?php
				$equipo = array(
 						array("Rooney","Chicharito","Gigs"),
 						array("Suarez"),
 						array("Torres","Terry","Etoo")
 					);

					for( $i=0; $i<3 ;$i++) {

						for($j=0 ; $j<3; $j++) {


							echo $equipo[$i][$j];
							echo "<br>";
						}

					}
			?>

		</body>


	</head>
</html>
