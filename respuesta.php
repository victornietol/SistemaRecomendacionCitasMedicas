<?php
//Iniciamos session para poder guardar y acceder a la varable $_SESSION en todos los archivos php
session_start();
//Llamamos al header 
require ("header.php");
echo "<body>";
//Llamamos al navegation menu 
require ("navigationMenu.php");
// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" and !empty($_POST["gridSintomas"])) {
    // Recuperar los datos del formulario
    $sintomas = $_POST["gridSintomas"]; // Se recuperan los valores de los checkbox seleccionados

    $_SESSION["sintomas"] = $sintomas;

    //Obtenemos la clasificación
    $clasificacion = require ("KBS.php");
    $_SESSION["clasificacion"] = $clasificacion;
    //Generamos la coneccion en la DB
    $user = "example_user";
    $password = "password";
    $database = "recomendaciones";
    $table = "doctores";
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

    if ($clasificacion == "General") {
        try {
            //Consulta
            $consult = "SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = 'General'";
            //variable que almacena la tabla en modo de string
            $_SESSION["consult1"] = "";
            //Generación de la tabla en modo string
            foreach ($db->query($consult) as $row) {
                $_SESSION["consult1"] .= "<tr>" . "<td>" . $row['nombre'] . "</td>" . "<td>" . $row['apellido_p'] . "</td>" . "<td>" . $row['apellido_m'] . "</td>" . "<td>" . $row['telefono'] . "</td>" . "<td>" . $row['correo'] . "</td>";
            }
            //Redireccionamiento a general.php
            header("location: general.php");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    } else {
        try {
            //Consulta de medicos de especialidad
            $consult = sprintf("SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = '%s'", $clasificacion);
            //variable que almacena la tabla en modo de string
            $_SESSION["consult2"] = "";
            //Generación de la tabla de especialidad en modo string
            foreach ($db->query($consult) as $row) {
                $_SESSION["consult2"] .= "<tr>" . "<td>" . $row['nombre'] . "</td>" . "<td>" . $row['apellido_p'] . "</td>" . "<td>" . $row['apellido_m'] . "</td>" . "<td>" . $row['telefono'] . "</td>" . "<td>" . $row['correo'] . "</td>";

            }
            //Consulta de medicos generales
            $consult1 = "SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = 'General'";
            //variable que almacena la tabla en modo de string
            $_SESSION["consult3"] = "";
            //Generación de la tabla de especialidad en modo string
            foreach ($db->query($consult1) as $row) {
                $_SESSION["consult3"] .= "<tr>" . "<td>" . $row['nombre'] . "</td>" . "<td>" . $row['apellido_p'] . "</td>" . "<td>" . $row['apellido_m'] . "</td>" . "<td>" . $row['telefono'] . "</td>" . "<td>" . $row['correo'] . "</td>";

            }
            //Redireccionamiento a general.php
            header("location: especialidad.php");

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
} else {
    // Si no se enviaron datos del formulario, mostrar un mensaje de error o redirigir a otra página
    header("location: sintomas_error.php");
}
echo "</body>";
?>