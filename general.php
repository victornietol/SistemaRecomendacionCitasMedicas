<?php
session_start();
//Llamamos el header
require ("header.php");
echo "<body>";
//Llamamos la barra de navegacion
require ("navigationMenu.php");
//Generamos la table de doctores
echo "<h2>Lista de Doctores Generales Recomendados</h2>";
echo "<table class='table'>";
//Generams el header de la tabla
echo "<thead><tr><th scope='col'>Nombre</th><th scope='col'>Apellido paterno</th><th scope='col'>Apellido materno</th><th scope='col'>telefono</th><th scope='col'>correo</th></tr></thead>";
echo "<tbody>";
//Generamos las filas llamandolas desde la varaible str consult1
echo $_SESSION["consult1"];

echo "</tbody>";
echo "</table>";

echo "</body>";
?>