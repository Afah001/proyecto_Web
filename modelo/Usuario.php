<?php 
	class Usuario extends Persona {

		private $Cuenta;  //objeto Cuenta


		public function __construct($_nombre,$_apellido,$_edad,$_Cuenta){

			parent::__construct($_nombre,$_apellido,$_edad);
			$this->Cuenta->$_Cuenta;
		}


		

	}
?>