



<?php

	class persona{

		public $nombre,$edad,$pais;

		public function mostrarinformacion() {

			echo $this->nombre;
			echo '<br>';
			echo $this->edad;
			echo '<br>';		
			echo $this->pais;

		}

	}

	$carlos=new persona;

	$carlos->nombre='Alan';
	$carlos->edad=35;
	$carlos->pais='Costa Rica';

	$carlos->mostrarinformacion();

	$pedro->nombre='Pedro Alan';
	$pedro->nombre=35;
	$pedro->nombre='Costa Rica';
	
	


?>
