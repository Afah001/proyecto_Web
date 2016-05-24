<?php 
	class Usuario extends Persona {


		private $Cuenta;  //objeto Cuenta  =correo, contraseña
		private $tipo; 		//usuuario especialista o usuario normal


		public function __construct($_nombre,$_apellido,$_edad,$_di,$_Cuenta,$_tipo){

			parent::__construct($_nombre,$_apellido,$_edad,$_di);
			$this->Cuenta->$_Cuenta;
			$this->tipo=$_tipo;
		}	

	}	
?>