

<?php
	class punto {

		private:
			$x;
			$y;
		public:
			punto();
			setpunto( $_x, $_y);
			getpuntox();
			getpuntoy();



	}


punto::punto(){



}

punto::setpunto($_x,$_y){


	$this->x=$_x;
	$this->x=$_y;

}

punto::getpuntox(){


	return $x;

}

punto p1();
p1.setpunto(3,4);
echo p1.getpuntox();




?>
