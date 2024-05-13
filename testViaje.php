<?php

// Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.
// Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.

include "Viaje.php";
include "Pasajero.php";
include "ResponsableV.php";

function menu(){
    $objPasajero1 = new Pasajero("Lautaro", "Barrera" , 41421435, 2995506358);
    $objPasajero2 = new Pasajero("Pedro", "Gonzales" , 43352635, 2995448866);
    $objPasajero3 = new Pasajero("Lucio", "Brunet" , 42256984, 2995436857);

    $objResponsableV = new ResponsableV(1, 123, "Carla", "Pérez");

    $viajeFeliz = new Viaje(1, "Mar del Plata", 4, [$objPasajero1, $objPasajero2, $objPasajero3], $objResponsableV);

    $eleccion = 0;
    while ($eleccion != 8){
        echo "Viaje Feliz \n" .
        "1) Ver detalles del viaje \n" .
        "2) Editar código de viaje \n" .
        "3) Editar destinto \n" .
        "4) Editar cantidad máxima de pasajeros \n" .
        "5) Editar responsable de viaje \n" .
        "6) Editar pasajero \n" .
        "7) Agregar pasajero \n" .
        "8) Salir \n";
    
        $eleccion = trim(fgets(STDIN));
        switch ($eleccion){
            case 1:
                echo $viajeFeliz;
                break;
            case 2:
                echo "Ingrese el nuevo código de viaje: \n";
                $nuevoCodigo = trim(fgets(STDIN));
                $viajeFeliz->setCodigo($nuevoCodigo);
                echo "Código actualizado \n";
                break;
            case 3:
                echo "Ingrese el nuevo destino: \n";
                $nuevoDestino = trim(fgets(STDIN));
                $viajeFeliz->setDestino($nuevoDestino);
                echo "Destino actualizado \n";
                break;
            case 4:
                echo "Ingrese el nuevo máximo de pasajeros: \n";
                $nuevoMaximo = trim(fgets(STDIN));
                $viajeFeliz->setCantidadMaximaDePasajeros($nuevoMaximo);
                echo "Máximo de pasajeros actualizado \n";
                break;
            case 5:
                echo "Editar responsable de viaje \n" .
                "1) Editar número de empleado \n" .
                "2) Editar número de licencia \n" .
                "3) Editar nombre \n" .
                "4) Editar apellido \n";
                $eleccion = trim(fgets(STDIN));
                switch ($eleccion){
                    case 1:
                        echo "Ingrese el nuevo número de empleado: \n";
                        $nuevoNumero = trim(fgets(STDIN));
                        $viajeFeliz->getObjResponsableV()->setNumeroDeEmpleado($nuevoNumero);
                        echo "Número de empleado actualizado \n";
                        break;
                    case 2:
                        echo "Ingrese el nuevo número de licencia: \n";
                        $nuevoNumero = trim(fgets(STDIN));
                        $viajeFeliz->getObjResponsableV()->setNumeroDeLicencia($nuevoNumero);
                        echo "Número de licencia actualizado \n";
                        break;
                    case 3:
                        echo "Ingrese el nuevo nombre: \n";
                        $nuevoNombre = trim(fgets(STDIN));
                        $viajeFeliz->getObjResponsableV()->setNombre($nuevoNombre);
                        echo "Nombre actualizado \n";
                        break;
                    case 4:
                        echo "Ingrese el nuevo apellido: \n";
                        $nuevoApellido = trim(fgets(STDIN));
                        $viajeFeliz->getObjResponsableV()->setApellido($nuevoApellido);
                        echo "Apellido actualizado \n";
                        break;
                    default:
                        echo "Opción incorrecta";
                }
                break;
            case 6:
                echo "Ingrese el número de documento del pasajero que quiere editar: \n";
                $documentoPasajero = trim(fgets(STDIN));
                $objPasajero = $viajeFeliz->buscarPasajero($documentoPasajero);
                if ($objPasajero != null){
                    echo $objPasajero . "\n" .
                    "1) Editar nombre \n" .
                    "2) Editar apellido \n" .
                    "3) Editar número de documento \n" .
                    "4) Editar teléfono \n";
                    $eleccion = trim(fgets(STDIN));
                    switch ($eleccion){
                        case 1:
                            echo "Ingrese el nuevo nombre: \n";
                            $nuevoNombre = trim(fgets(STDIN));
                            $objPasajero->setNombre($nuevoNombre);
                            echo "Nombre actualizado \n";
                            break;
                        case 2:
                            echo "Ingrese el nuevo apellido: \n";
                            $nuevoApellido = trim(fgets(STDIN));
                            $objPasajero->setApellido($nuevoApellido);
                            echo "Apellido actualizado \n";
                            break;
                        case 3:
                            echo "Ingrese el nuevo número de documento: \n";
                            $nuevoDocumento = trim(fgets(STDIN));
                            $objPasajero->setNumeroDeDocumento($nuevoDocumento);
                            echo "Número de documento actualizado \n";
                            break;
                        case 4:
                            echo "Ingrese el nuevo teléfono: \n";
                            $nuevoTelefono = trim(fgets(STDIN));
                            $objPasajero->setTelefono($nuevoTelefono);
                            echo "Teléfono actualizado \n";
                            break;
                        default:
                            echo "Opción incorrecta";
                    }
                }
                break;
            case 7:
                echo "Agregar pasajero \n" .
                "Ingrese número de DNI: \n";
                $dni = trim(fgets(STDIN));
                echo "Ingrese nombre: \n";
                $nombre = trim(fgets(STDIN));
                echo "Ingrese apellido: \n";
                $apellido = trim(fgets(STDIN));
                echo "Ingrese teléfono: \n";
                $telefono = trim(fgets(STDIN));
                $nuevoPasajero = new Pasajero($nombre,$apellido,$dni,$telefono);
                $agregado = $viajeFeliz->agregarPasajero($nuevoPasajero);
                if ($agregado){
                    echo "Pasajero agregado correctamente. \n";
                } else {
                    echo "No pudimos agregar al pasajero.\n";
                }
                break;
            case 8:
                echo "Gracias por usar nuestro programa.\n";
                break;
            default:
                echo "Opción incorrecta\n";
                break;

        }
    }


}

menu();