<?php

include "Database.php";
include "Empresa.php";
include "ResponsableV.php";
include "Viaje.php";

$empresa = new Empresa;
$empresa->cargar("Viaje Feliz", "Avenida Argentina 1080");
$empresa->insertar();

$empleado = new ResponsableV;
$empleado->cargar(123, "Lautaro", "Barrera");
$empleado->insertar();

$viaje = new Viaje;
$viaje->cargar("Mar del Plata", 10, [], $empleado, 10000, $empresa);
$viaje->insertar();