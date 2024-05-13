<?php

// La clase Pasajeros con necesidades especiales se refiere a pasajeros que pueden requerir servicios especiales como sillas de ruedas, asistencia para el embarque o desembarque, o comidas especiales para personas con alergias o restricciones alimentarias.

class PasajeroConNecesidadesEspeciales extends Pasajero{
    private $sillaDeRuedas;
    private $asistencia;
    private $comidaEspecial;

    public function __construct(string $nombre, string $apellido, int $numeroDeDocumento, int $telefono, int $numeroDeAsiento, int $numeroDeTicket, bool $sillaDeRuedas, bool $asistencia, bool $comidaEspecial){
        parent::__construct($nombre, $apellido, $numeroDeDocumento, $telefono, $numeroDeAsiento, $numeroDeTicket);
        $this->sillaDeRuedas = $sillaDeRuedas;
        $this->asistencia = $asistencia;
        $this->comidaEspecial = $comidaEspecial;
    }

    public function getSillaDeRuedas(){
        return $this->sillaDeRuedas;
    }

    public function setSillaDeRuedas($value){
        $this->sillaDeRuedas = $value;
    }

    public function getAsistencia(){
        return $this->asistencia;
    }

    public function setAsistencia($value){
        $this->asistencia = $value;
    }
    
    public function getComidaEspecial(){
        return $this->comidaEspecial;
    }

    public function setComidaEspecial($value){
        $this->comidaEspecial = $value;
    }

    public function __toString(){
        $sillaDeRuedas = $this->getSillaDeRuedas() ? "Sí" : "No";
        $asistencia = $this->getAsistencia() ? "Sí" : "No";
        $comidaEspecial = $this->getComidaEspecial() ? "Sí" : "No";
        $cadena = parent::__toString();
        $cadena .= "Silla de ruedas: " . $sillaDeRuedas . "\n";
        $cadena .= "Asistencia: " . $asistencia . "\n";
        $cadena .= "Comida especial: " . $comidaEspecial . "\n";
        return $cadena;
    }

    public function darPorcentajeIncremento(){
        // Si el pasajero tiene necesidades especiales y requiere silla de ruedas, asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados entonces el incremento es del 15%.
        $sillaDeRuedas = $this->getSillaDeRuedas();
        $asistencia = $this->getAsistencia();
        $comidaEspecial = $this->getComidaEspecial();
        $porcentaje = 30;
        if (
            ($sillaDeRuedas && !$asistencia && !$comidaEspecial) ||
            (!$sillaDeRuedas && $asistencia && !$comidaEspecial) ||
            (!$sillaDeRuedas && !$asistencia && $comidaEspecial)
        ) {
            $porcentaje = 15;
        }
        return $porcentaje;
    }
}