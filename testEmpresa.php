<?php

include "Database.php";
include "Empresa.php";

$empresa = new Empresa;

$empresa->cargar("Laprida", "Alem 1515");

$respuesta = $empresa->insertar();

echo $respuesta;