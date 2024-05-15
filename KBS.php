<?php
session_start();

//Conjuntos de sintomas cardiovasculares
$sintomasCardio = array(
    "dolorPecho",
    "dificultadRespirar",
    "frioPiernas",
    "frioBrazos",
    "dolorEspalda",
    "dolorCuello"
);
//Conjunto de sintomas edocrinologos
$sintomasEndocrino = array(
    "fatiga",
    "hormigueoExtremidades",
    "perdidaPeso",
    "insomnio",
    "aumentoPeso"
);
//Conjunto de sintomas generales
$sintomasGenerales = array(
    "tos",
    "congestionNasal",
    "dolorGarganta",
    "fiebre",
    "dolorCabeza",
    "enrojecimientoPiel",
    "inflamacionPiel",
    "dolorOrinar",
    "vomitos",
    "diarrea"
);
//Sintomas del form enviados por el metodo post obtenido de seassion
$sintomasA = $_SESSION["sintomas"];
//Variables para contabilizar el numero de sintomas con clasificación General, Endocrinologo y Cardiologa
$gen = 0;
$end = 0;
$card = 0;
//Clasificación de cada sintoma aumentando el valor de la respectiva variable de cada clasificación
foreach ($sintomasA as &$sintoma) {
    //Generamos el String de ejecución para el Python
    if (in_array($sintoma, $sintomasCardio)) {
        $card++;
    }
    if (in_array($sintoma, $sintomasGenerales)) {
        $gen++;
    }
    if (in_array($sintoma, $sintomasEndocrino)) {
        $end++;
    }
}

//Generación de arreglo llave-valor "Especialidad" => "Numero de coincidencias en los sintomas del usuario"
$valores1 = [
    "Cardiologo" => $card,
    "Endocrinologo" => $end,
    "General" => $gen
];

//Ordenamos los elementos del arreglo de Mayor a menor conforme al valor 
arsort($valores1);

//Regresamos el primer elemento del arreglo de llaves
return array_keys($valores1)[0];
?>