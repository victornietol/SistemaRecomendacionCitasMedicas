<?php
// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $sintomas = $_POST["gridSintomas"]; // Se recuperan los valores de los checkbox seleccionados

    // imprime los datos para demostrar que se han recibido correctamente
    echo "Síntomas seleccionados: ";
    foreach ($sintomas as $sintoma) {
        echo $sintoma . ", ";
    }
} else {
    // Si no se enviaron datos del formulario, mostrar un mensaje de error o redirigir a otra página
    echo "No se recibieron datos del formulario";
}
?>