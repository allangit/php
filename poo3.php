






<?php

	class persona{

		public $nombre,$edad,$pais;

		function __construct($nombre,$edad,$pais) {

			$this->nombre=$nombre;
			$this->edad=$edad;
			$this->pais=$pais;

		}

		public function mostrar() {

			echo 'Nombre:: '.$this->nombre;
			echo '<br>';
			echo 'Edad:: '.$this->edad;
			echo '<br>';		
			echo 'Pais: '.$this->pais;


		}

	}

	class Estudiante extends persona {

	
		function __construct($nombre,$edad,$pais,$carrera){


			parent::__construct($nombre,$edad,$pais);

				$this->carrera=$carrera;

		}
	
		public function mostrarpersona() {

			persona::mostrar();
			echo '<br>';
			echo 'Carrera::'. $this->carrera;
		}
			
	
	}


	class catedra extends Estudiante {


		function __construct($nombre,$edad,$pais,$carrera,$id) {


			parent::__construct($nombre,$edad,$pais,$carrera);

				$this->id=$id;

		}


		public function mostrarcatedra() {

			Estudiante::mostrarpersona();
			echo '<br>';
			echo 'id::'. $this->id;
		}



	}



	$carlos=new catedra('Alan',35,'Costa Rica','informatica','502312345');
	echo $carlos->mostrarcatedra();

	echo '<br>';




?>
