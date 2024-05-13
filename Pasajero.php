<?php

// Cada pasajero guarda  su nombre, apellido, numero de documento y teléfono.
Class Pasajero {
    private $nombre;
    private $apellido;
    private $numeroDeDocumento;
    private $telefono;

    public function __construct( string $nombre, string $apellido, int $numeroDeDocumento, int $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroDeDocumento = $numeroDeDocumento;
        $this->telefono = $telefono;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($value){
        $this->apellido = $value;
    }

    public function getNumeroDeDocumento(){
        return $this->numeroDeDocumento;
    }

    public function setNumeroDeDocumento($value){
        $this->numeroDeDocumento = $value;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($value){
        $this->telefono = $value;
    }

    public function __toString(){
        return
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Número de documento: " . $this->getNumeroDeDocumento() . "\n" .
        "Teléfono: " . $this->getTelefono() . "\n";
    }
}