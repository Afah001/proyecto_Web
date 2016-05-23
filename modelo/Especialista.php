<?php 
	class Especialista extends Persona{

		$tipo; //tipo de medico especialista

		function __construct($_nombre,$_apellido,$_edad,$_di,$_tipo){

				parent::__construct($_nombre,$_apellido,$_edad,$_di);
				$this->tipo=$_tipo;

		}

?>