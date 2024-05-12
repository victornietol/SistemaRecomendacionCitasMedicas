<?php
session_start();
require ("header.php");
echo "<body>";
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
            //Este echo es para 
            $consult = sprintf("SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = '%s'", $clasificacion);
            //variable que almacena la tabla en modo de string
            $_SESSION["consult2"] = "";
            foreach ($db->query($consult) as $row) {
                $_SESSION["consult2"] .= "<tr>" . "<td>" . $row['nombre'] . "</td>" . "<td>" . $row['apellido_p'] . "</td>" . "<td>" . $row['apellido_m'] . "</td>" . "<td>" . $row['telefono'] . "</td>" . "<td>" . $row['correo'] . "</td>";

            }

            $consult1 = "SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = 'General'";
            $_SESSION["consult3"] = "";

            foreach ($db->query($consult1) as $row) {
                $_SESSION["consult3"] .= "<tr>" . "<td>" . $row['nombre'] . "</td>" . "<td>" . $row['apellido_p'] . "</td>" . "<td>" . $row['apellido_m'] . "</td>" . "<td>" . $row['telefono'] . "</td>" . "<td>" . $row['correo'] . "</td>";

            }

            header("location: especialidad.php");

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
} else {
    // Si no se enviaron datos del formulario, mostrar un mensaje de error o redirigir a otra página
    echo "No se recibieron datos del formulario";
}
echo "</body>";
?>