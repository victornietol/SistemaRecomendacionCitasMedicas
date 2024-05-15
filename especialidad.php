<?php
session_start();
//Llamamos el header
require ("header.php");
echo "<body>";
//Llamamos a la barra de navegacion
require ("navigationMenu.php");
//Generamos la tabla de doctores especializados
echo sprintf("<h2>Lista de Doctores %ss Recomendados</h2>", $_SESSION["clasificacion"]);
echo "<table class='table'>";
//Generamos el header de la tabla de especialidad
echo "<thead><tr><th scope='col'>Nombre</th><th scope='col'>Apellido paterno</th><th scope='col'>Apellido materno</th><th scope='col'>telefono</th><th scope='col'>correo</th></tr></thead>";
echo "<tbody>";
//Generamos las filas de la tabla de especialidad
echo $_SESSION["consult2"];

echo "</tbody>";
echo "</table>";
//Generamos la tabla de doctores generales
echo "<h2>Lista de Doctores Generales Recomendados</h2>";
echo "<table class='table'>";
//Generamos el header de la tabla de medicos generales
echo "<thead><tr><th scope='col'>Nombre</th><th scope='col'>Apellido paterno</th><th scope='col'>Apellido materno</th><th scope='col'>telefono</th><th scope='col'>correo</th></tr></thead>";
echo "<tbody>";
//Generamos las filas de las tablas
echo $_SESSION["consult3"];

echo "</tbody>";
echo "</table>";

echo "</body>";
?>