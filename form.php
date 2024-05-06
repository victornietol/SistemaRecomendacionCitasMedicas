<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de síntomas</title>
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
    <div class="container">
        <form>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-12">Seleccione sus síntomas</legend>
                <div class="col-sm-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas2" value="option2">
                      <label class="form-check-label" for="gridSintomas2">
                        Fiebre
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas3" value="option3">
                      <label class="form-check-label" for="gridSintomas3">
                        Tos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas4" value="option4">
                      <label class="form-check-label" for="gridSintomas4">
                        Dolor de garganta
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas5" value="option5">
                      <label class="form-check-label" for="gridSintomas5">
                        Congestion nasal
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas6" value="option6">
                      <label class="form-check-label" for="gridSintomas6">
                        Dificultad para respirar
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas7" value="option7">
                      <label class="form-check-label" for="gridSintomas7">
                        Fatiga
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas8" value="option8">
                      <label class="form-check-label" for="gridSintomas8">
                        Dolor de pecho
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas9" value="option9">
                      <label class="form-check-label" for="gridSintomas9">
                        Dolor abdominal
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas10" value="option10">
                      <label class="form-check-label" for="gridSintomas10">
                        Nauseas
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas11" value="option11">
                      <label class="form-check-label" for="gridSintomas11">
                        Vomitos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas12" value="option12">
                      <label class="form-check-label" for="gridSintomas12">
                        Diarrea
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas13" value="option13">
                      <label class="form-check-label" for="gridSintomas13">
                        Mareos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas14" value="option14">
                      <label class="form-check-label" for="gridSintomas14">
                        Perdida de apetito
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas15" value="option15">
                      <label class="form-check-label" for="gridSintomas15">
                        Perdida de peso inexplicable
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas16" value="option16">
                      <label class="form-check-label" for="gridSintomas16">
                        Dolor muscular o articular
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas17" value="option17">
                      <label class="form-check-label" for="gridSintomas17">
                        Cambios en la vision
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas18" value="option18">
                      <label class="form-check-label" for="gridSintomas18">
                        Sangrado anormal 
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="gridSintomas" id="gridSintomas19" value="option19">
                      <label class="form-check-label" for="gridSintomas19">
                        Cambios en el patron del sueño
                      </label>
                    </div>
                  </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-danger btn-submit">Enviar</button>
        </form>
    </div>
</body>
</html>
