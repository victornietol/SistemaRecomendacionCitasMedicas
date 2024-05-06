<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctores</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="form.php">Sintomas</a>
                         </li>
                         <li class="nav-item">
                <a class="nav-link" href="Doctores.php">Doctores</a>
                         </li>
                         <li class="nav-item"></li>
            </div>
            </div>
          </nav>
        </div>
    <h2>Lista de Doctores</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">cedula</th>
            <th scope="col">fecha de nacimiento</th>
            <th scope="col">telefono</th>
            <th scope="col">correo</th>
            <th scope="col">especialidad</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Juan</td>
            <td>Martinez</td>
            <td>Hernandez</td>
            <td>1234567890</td>
            <td>10/05/1978</td>
            <td> 555-123-4567</td>
            <td>juan.martinez@example.com</td>
            <td>Pediatría</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Ana</td>
            <td>Rodriguez</td>
            <td>López</td>
            <td>0987654321</td>
            <td>25/09/1985</td>
            <td>555-987-6543</td>
            <td>ana.rodriguez@example.com</td>
            <td> Ginecología</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Carlos</td>
            <td>Garcia</td>
            <td>Martinez</td>
            <td>1357924680</td>
            <td>03/12/1972</td>
            <td>555-246-8013</td>
            <td>carlos.garcia@example.com</td>
            <td>Cardiología</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Laura</td>
            <td>Perez</td>
            <td>Rodriguez</td>
            <td>2468013579</td>
            <td>15/07/1980</td>
            <td>555-678-9012</td>
            <td>laura.perez@example.com</td>
            <td>Dermatología</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>José</td>
            <td>Lopez</td>
            <td>Martínez</td>
            <td>9876543210</td>
            <td>20/04/1965</td>
            <td> 555-432-1098</td>
            <td>jose.lopez@example.com</td>
            <td>Neurología</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Maria</td>
            <td>Fernandez</td>
            <td>Garcia</td>
            <td>3692581470</td>
            <td> 08/11/1976</td>
            <td>555-876-5432</td>
            <td>maria.fernandez@example.com</td>
            <td>Psiquiatría</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Diana</td>
            <td>Ramirez</td>
            <td>Perez</td>
            <td>1593572864</td>
            <td>17/06/1973</td>
            <td>555-789-0123</td>
            <td>diana.ramirez@example.com</td>
            <td>Oncología</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Miguel</td>
            <td>Gonzalez</td>
            <td>Rodríguez</td>
            <td>7418529630</td>
            <td>29/02/1988</td>
            <td>555-210-9876</td>
            <td>miguel.gonzalez@example.com</td>
            <td>Ortopedia</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Ricardo</td>
            <td>Hernandez</td>
            <td>Martinez</td>
            <td>5820371469</td>
            <td>12/03/1982</td>
            <td>555-345-6789</td>
            <td>ricardo.hernandez@example.com</td>
            <td>Oftalmología</td>
            
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Patricia</td>
            <td>Torres</td>
            <td>García</td>
            <td>2037185946</td>
            <td>05/09/1970</td>
            <td>555-901-2345</td>
            <td>patricia.torres@example.com</td>
            <td>Endocrinología</td>
          </tr>
        </tbody>
      </table>
</body>