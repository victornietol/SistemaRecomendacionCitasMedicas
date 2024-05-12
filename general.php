<?php
session_start();

require ("header.php");
echo "<body>";
require ("navigationMenu.php");

echo "<h2>Lista de Doctores Generales Recomendados</h2>";
echo "<table class='table'>";
echo "<thead><tr><th scope='col'>Nombre</th><th scope='col'>Apellido paterno</th><th scope='col'>Apellido materno</th><th scope='col'>telefono</th><th scope='col'>correo</th></tr></thead>";
echo "<tbody>";

echo $_SESSION["consult1"];

echo "</tbody>";
echo "</table>";

echo "</body>";
?>