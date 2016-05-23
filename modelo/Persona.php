<?php
class Persona{

	private $nombre;
	private $apellido;
	private $edad;

	public function __construct($_nombre,$_apellido,$_edad){

		$this->nombre=$_nombre;
		$this->apellido=$_apellido;
		$this->edad=$_edad;

	}


}

?>