<?php

class Empresa {
    private $nombre;
    private $direccion;
    private $id;
	private $mensajeoperacion;

    public function __construct(){
        $this->nombre = "";
        $this->direccion = "";
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getId(){
        return $this->id;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function setDireccion(string $direccion){
        $this->direccion = $direccion;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function setMensajeoperacion($mensaje){
        $this->mensajeoperacion = $mensaje;
    }

    public function cargar(string $nombre, string $direccion){
        $this->setNombre($nombre);
        $this->setDireccion($direccion);
    }

    public function insertar(){
        $database = new Database;
        $resp = false;
        $consultaInsertar = "INSERT INTO empresa(enombre, edireccion) VALUES ('".$this->getNombre()."','".$this->getDireccion()."')";
		
		if($database->iniciar()){

			if($id = $database->devuelveIDInsercion($consultaInsertar)){
                $this->setId($id);
			    $resp=  true;

			}	else {
					$this->setMensajeoperacion($database->getError());
			}

		} else {
				$this->setMensajeoperacion($database->getError());
			
		}
		return $resp;
    }
}