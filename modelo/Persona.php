<?php
class Persona{

	private $nombre;
	private $apellido;
	private $edad;
	private $di;//documento de identidad
	
	public function __construct($_nombre,$_apellido,$_edad,$_di){

		$this->nombre=$_nombre;
		$this->apellido=$_apellido;
		$this->edad=$_edad;
		$this->di=$_di;

	}


}

?>