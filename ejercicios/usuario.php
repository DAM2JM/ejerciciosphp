<?php

class usuario{
	private $nombre;
	private $telefono;

	public function __construct ($nom,$tel){
		$this->nombre = $nom;
		$this->telefono = $tel;
		//this.$nombre=$nom;
		//this.$telefono=$tel;
	}
	public function getNombre()
    {
        return $this->nombre;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
}
?>