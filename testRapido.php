<?php

include "Database.php";
include "ResponsableV.php";
include "Empresa.php";
include "Viaje.php";

$empresa = new Empresa;
$empresa->buscar("Viaje Feliz");
// echo $empresa;
// $empresa->insertar();

$empleado = new ResponsableV;
// $empleado->cargar(123, "Lautaro", "Barrera");
// $empleado->insertar();
$empleado->buscar(2);

$viaje = new Viaje;
// $viaje->cargar("Mar del Plata", 10, [], $empleado, 10000, $empresa);
$viaje->buscar(8);
echo $viaje;
