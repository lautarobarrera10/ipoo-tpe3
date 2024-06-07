<?php

class PasajeroEstandar extends Pasajero{
    public function darPorcentajeIncremento(){
        // Por último, para los pasajeros comunes el porcentaje de incremento es del 10 %.
        $porcentaje = 10;
        return $porcentaje;
    }
}