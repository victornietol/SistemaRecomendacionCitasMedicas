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
    $read = require ("SE.php");

    //Generamos la coneccion en la DB
    $user = "example_user";
    $password = "password";
    $database = "recomendaciones";
    $table = "doctores";
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

    if ($read == "General") {
        try {
            //Este echo es para 
            $consult = "SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = 'General'";

            echo "<h2>Lista de Doctores Generales Recomendados</h2>";
            echo "<table class='table'>";
            echo "<thead><tr><th scope='col'>Nombre</th><th scope='col'>Apellido paterno</th><th scope='col'>Apellido materno</th><th scope='col'>telefono</th><th scope='col'>correo</th></tr></thead>";
            echo "<tbody>";
            foreach ($db->query($consult) as $row) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido_p'] . "</td>";
                echo "<td>" . $row['apellido_m'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['correo'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    } else {
        try {
            //Este echo es para 
            $consult = sprintf("SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = '%s'", $read);
            echo sprintf("<h2>Lista de Doctores %ss Recomendados</h2>", $read);
            echo "<table class='table'>";
            echo "<thead><tr><th scope='col'>Nombre</th><th scope='col'>Apellido paterno</th><th scope='col'>Apellido materno</th><th scope='col'>telefono</th><th scope='col'>correo</th></tr></thead>";
            echo "<tbody>";
            foreach ($db->query($consult) as $row) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido_p'] . "</td>";
                echo "<td>" . $row['apellido_m'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['correo'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";

            $consult1 = "SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = 'General'";
            echo "<h2>Lista de Doctores Generales Recomendados</h2>";
            echo "<table class='table'>";
            echo "<thead><tr><th scope='col'>Nombre</th><th scope='col'>Apellido paterno</th><th scope='col'>Apellido materno</th><th scope='col'>telefono</th><th scope='col'>correo</th></tr></thead>";
            echo "<tbody>";
            foreach ($db->query($consult1) as $row) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido_p'] . "</td>";
                echo "<td>" . $row['apellido_m'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['correo'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";

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