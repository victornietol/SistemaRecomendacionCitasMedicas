<?php
//Recibimos los datos del form

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $sintomas = $_POST["gridSintomas"]; // Se recuperan los valores de los checkbox seleccionados

    // imprime los datos para demostrar que se han recibido correctamente
    echo "Síntomas seleccionados: ";
    
    $comando = "python3 SE.py -n";

    foreach ($sintomas as $sintoma) {
        echo $sintoma . ", ";

        //Generamos el String de ejecución para el Python
        $comando .= " ". $sintoma ." ";
    }

    //Realizamos su ejecución

    $read = shell_exec($comando);

    //Generamos la coneccion en la DB
    $user = "example_user";
    $password = "password";
    $database = "example_database";
    $table = "todo_list";


    //Revisamos lo que nos devuelve el .Py
    if ($read == "General") {
        try {
            $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
            //Este echo es para 
            echo "<h2>Medicos Generales</h2><ol>";
            $consult = "SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = General";
            
            foreach($db->query($consult) as $row) {
                echo "<li>" . $row['nombre'] . $row['apellido_p'] . $row['apellido_m'] . $row['telefono'] . $row['correo'] .  "</li>";
            }
            echo "</ol>";
            } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
            
            }
        

    } else {
        try {
            $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
            //Este echo es para 
            echo "<h2>Medicos Especializados</h2><ol>";
            $consult = sprintf("SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = %s",$read);
            
            foreach($db->query("SELECT content FROM $table") as $row) {
                echo "<li>" . $row['nombre'] . $row['apellido_p'] . $row['apellido_m'] . $row['telefono'] . $row['correo'] . "</li>";
            }
            echo "</ol>";

            echo "<h2>Medicos Generales</h2><ol>";
            $consult1 = "SELECT nombre,apellido_p,apellido_m,telefono,correo  FROM $table WHERE especialidad = General";
            
            foreach($db->query($consult1) as $row) {
                echo "<li>" . $row['nombre'] . $row['apellido_p'] . $row['apellido_m'] . $row['telefono'] . $row['correo'] .  "</li>";
            }
            echo "</ol>";

            } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
            }
    }

} else {
    // Si no se enviaron datos del formulario, mostrar un mensaje de error o redirigir a otra página
    echo "No se recibieron datos del formulario";
}








?>