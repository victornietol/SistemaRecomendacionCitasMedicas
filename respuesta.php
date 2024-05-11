<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctores</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <div class="encabezado">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="cruz.png" alt="..." width="30" height="24">
                </a>
                <a class="nav-link" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="form.php">Sintomas</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>
    <?php
    //Recibimos los datos del form
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

    $gen = 0;
    $end = 0;
    $card = 0;

    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar los datos del formulario
        $sintomas = $_POST["gridSintomas"]; // Se recuperan los valores de los checkbox seleccionados
    
        //Ubuntu usar python3
        //$comando = "python3 SE.py -n";
        //$comando = "python SE.py -n";

        foreach ($sintomas as &$sintoma) {
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
        //Generamos diccionario
        $valores1 = [
            "Cardiologo" => $card,
            "Endocrinologo" => $end,
            "General" => $gen
        ];

        arsort($valores1);

        //Iteramos los sintomas para generar el parseArg del comando
        //foreach ($sintomas as &$sintoma) {
        //Generamos el String de ejecución para el Python
        //    $comando .= " " . $sintoma . " ";
        //}
        
        //Realizamos su ejecución
        //$read = exec($comando);
    
        //Obtenemos la clasificación
        $read = array_keys($valores1)[0];

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
    ?>
</body>