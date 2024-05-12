<?php
session_start();

$sintomasCardio = array(
    "dolorPecho",
    "dificultadRespirar",
    "frioPiernas",
    "frioBrazos",
    "dolorEspalda",
    "dolorCuello"
);

$sintomasEndocrino = array(
    "fatiga",
    "hormigueoExtremidades",
    "perdidaPeso",
    "insomnio",
    "aumentoPeso"
);

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


$sintomasA = $_SESSION["sintomas"];

$gen = 0;
$end = 0;
$card = 0;

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


$valores1 = [
    "Cardiologo" => $card,
    "Endocrinologo" => $end,
    "General" => $gen
];


arsort($valores1);


return array_keys($valores1)[0];
?>