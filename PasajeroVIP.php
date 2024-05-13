<?php

// La clase "PasajeroVIP" tiene como atributos adicionales el número de viajero frecuente y cantidad de millas de pasajero.

Class PasajeroVIP extends Pasajero{
    private $numeroDeViajeroFrecuente;
    private $cantidadDeMillas;

    public function __construct(string $nombre, string $apellido, int $numeroDeDocumento, int $telefono, int $numeroDeAsiento, int $numeroDeTicket, int $numeroDeViajeroFrecuente, int $cantidadDeMillas){
        parent::__construct($nombre, $apellido, $numeroDeDocumento, $telefono, $numeroDeAsiento, $numeroDeTicket);
        $this->$numeroDeViajeroFrecuente = $numeroDeViajeroFrecuente;
        $this->$cantidadDeMillas = $cantidadDeMillas;
    }

    public function getNumeroDeViajeroFrecuente(){
        return $this->numeroDeViajeroFrecuente;
    }

    public function setNumeroDeViajeroFrecuente($value){
        $this->numeroDeViajeroFrecuente = $value;
    }

    public function getCantidadDeMillas(){
        return $this->cantidadDeMillas;
    }

    public function setCantidadDeMillas($value){
        $this->cantidadDeMillas = $value;
    }

    public function __toString(){
        $cadena = parent::__toString();
        $cadena .= 
        "Número de viajero frecuente: " . $this->getNumeroDeViajeroFrecuente() . "\n" .
        "Cantidad de millas: " . $this->getCantidadDeMillas();
        return $cadena;
    }
}