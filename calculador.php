<html>
	<head>
		<title>
			MI PRIMER CALCULADORA EN PHP
		</title>

		<body>
			<?php

				function add($dato1,$dato2){

					$suma=$dato1+$dato2;
					echo "sum=",$suma;
					echo "<br>";

				}

				function sub($dato1,$dato2){


					$resta=$dato1-$dato2;
					echo "La resta es::",$resta;
				}

				function div($dato1,$dato2) {


					$division=$dato1/$dato2;
					echo "La division es::",$division;

				}

				function mul($dato1, $dato2){

					$multi=$dato1*$dato2;


				}


				if(isset($_POST["add"])) {

					add($_POST['first'],$_POST['second']);

				}


				if(isset($_POST['sub'])) {

                                        sub($_POST['first'],$_POST['second']);

                                }


				if(isset($_POST['div'])) {

                                        div($_POST['first'],$_POST['second']);

                                }


				if(isset($_POST['mul'])) {

                                        mul($_POST['first'],$_POST['second']);

                                }

			?>


			<form method="post">

				Enter First NUMBER:<input type="number" name=First/> <br> <br>
				Enter Second  number:<input type="number" name=secound/> <br> <br>
				<input type="submit" name="add" value= "ADDITION"/>

			</form>


		</body>
	</head>


</html>
