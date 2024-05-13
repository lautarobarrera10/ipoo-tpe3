<?php

// Cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido.
Class ResponsableV {
    private $numeroDeEmpleado;
    private $numeroDeLicencia;
    private $nombre;
    private $apellido;

    public function __construct( int $numeroDeEmpleado, int $numeroDeLicencia, string $nombre, string $apellido,){
        $this->numeroDeEmpleado = $numeroDeEmpleado;
        $this->numeroDeLicencia = $numeroDeLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNumeroDeEmpleado(){
        return $this->numeroDeEmpleado;
    }

    public function setNumeroDeEmpleado($value){
        $this->numeroDeEmpleado = $value;
    }

    public function getNumeroDeLicencia(){
        return $this->numeroDeLicencia;
    }

    public function setNumeroDeLicencia($value){
        $this->numeroDeLicencia = $value;
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

    public function __toString(){
        return
        "Número de empleado: " . $this->getNumeroDeEmpleado() . "\n" .
        "Número de licencia: " . $this->getNumeroDeLicencia() . "\n" .
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n";
    }
}