<?php

// Cada pasajero guarda  su nombre, apellido, numero de documento y teléfono.

// La clase Pasajero tiene como atributos el nombre, el número de asiento y el número de ticket del pasaje del viaje.

Class Pasajero {
    private $nombre;
    private $apellido;
    private $numeroDeDocumento;
    private $telefono;
    private $numeroDeAsiento;
    private $numeroDeTicket;

    public function __construct(){
        $this->nombre = "";
        $this->apellido = "";
        $this->numeroDeDocumento = 0;
        $this->telefono = 0;
        $this->numeroDeAsiento = 0;
        $this->numeroDeTicket = 0;
    }

    public function cargar(string $nombre, string $apellido, int $numeroDeDocumento, int $telefono, int $numeroDeAsiento, int $numeroDeTicket){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setNumeroDeDocumento($numeroDeDocumento);
        $this->setTelefono($telefono);
        $this->setNumeroDeAsiento($numeroDeAsiento);
        $this->setNumeroDeTicket($numeroDeTicket);
    }

    public function insertar(){
        //
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

    public function getNumeroDeAsiento(){
        return $this->numeroDeAsiento;
    }

    public function setNumeroDeAsiento($value){
        $this->numeroDeAsiento = $value;
    }

    public function getNumeroDeTicket(){
        return $this->numeroDeTicket;
    }

    public function setNumeroDeTicket($value){
        $this->numeroDeTicket = $value;
    }

    public function __toString(){
        return
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Número de documento: " . $this->getNumeroDeDocumento() . "\n" .
        "Teléfono: " . $this->getTelefono() . "\n" .
        "Número de asiento: " . $this->getNumeroDeAsiento() . "\n" .
        "Número de ticket: " . $this->getNumeroDeTicket() . "\n";
    }

    public function darPorcentajeIncremento(){
        $porcentaje = 0;
        return $porcentaje;
    }
}