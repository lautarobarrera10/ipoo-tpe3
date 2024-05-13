<?php

// De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
// El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero
//  También se desea guardar la información de la persona responsable de realizar el viaje,

Class Viaje {
    private $codigo;
    private $destino;
    private $cantidadMaximaDePasajeros;
    private $colObjPasajeros;
    private $objResponsableV;

    public function __construct( int $codigo, string $destino, int $cantidadMaximaDePasajeros, array $colObjPasajeros, ResponsableV $objResponsableV,){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantidadMaximaDePasajeros = $cantidadMaximaDePasajeros;
        $this->colObjPasajeros = $colObjPasajeros;
        $this->objResponsableV = $objResponsableV;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($value){
        $this->codigo = $value;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function setDestino($value){
        $this->destino = $value;
    }

    public function getCantidadMaximaDePasajeros(){
        return $this->cantidadMaximaDePasajeros;
    }

    public function setCantidadMaximaDePasajeros($value){
        $this->cantidadMaximaDePasajeros = $value;
    }

    public function getColObjPasajeros(){
        return $this->colObjPasajeros;
    }

    public function setColObjPasajeros($value){
        $this->colObjPasajeros = $value;
    }

    public function getObjResponsableV(){
        return $this->objResponsableV;
    }

    public function setObjResponsableV($value){
        $this->objResponsableV = $value;
    }

    public function __toString(){
        $pasajeros = $this->getColObjPasajeros();
        $pasajerosString = "";
        foreach ($pasajeros as $pasajero){
            $pasajerosString .= $pasajero . "\n";
        }
        return
        "Código: " . $this->getCodigo() . "\n" .
        "Destino: " . $this->getDestino() . "\n" .
        "Cantidad máxima de pasajeros: " . $this->getCantidadMaximaDePasajeros() . "\n" .
        "Pasajeros: " . $pasajerosString . "\n" .
        "Responsable: " . $this->getObjResponsableV() . "\n";
    }

    public function buscarPasajero(int $numeroDeDocumento){
        $colPasajeros = $this->getColObjPasajeros();
        $pasajeroEncontrado = null;
        $encontrado = false;
        $i = 0;
        while (!$encontrado && count($this->getColObjPasajeros()) > $i){
            if ($colPasajeros[$i]->getNumeroDeDocumento() == $numeroDeDocumento){
                $encontrado = true;
                $pasajeroEncontrado = $colPasajeros[$i];
            }
            $i++;
        }
        return $pasajeroEncontrado;
    }

    public function agregarPasajero(Pasajero $pasajero){
        $colPasajeros = $this->getColObjPasajeros();
        $pasajeroAgregado = false;
        $viajeCompleto = count($colPasajeros) == $this->getCantidadMaximaDePasajeros();
        if (!$viajeCompleto){
            $pasajeroRepetido = false;
            $i = 0;
            while (!$pasajeroRepetido && $i < count($colPasajeros)){
                if ($colPasajeros[$i]->getNumeroDeDocumento() == $pasajero->getNumeroDeDocumento()){
                    $pasajeroRepetido = true;
                }
                $i++;
            }
            if (!$pasajeroRepetido){
                array_push($colPasajeros, $pasajero);
                $this->setColObjPasajeros($colPasajeros);
                $pasajeroAgregado = true;
            }
        }
        return $pasajeroAgregado;
    }
}