<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de síntomas</title>
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
  <div class="container">
    <form action="respuesta.php" method="post">
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-12">Seleccione sus síntomas</legend>
        <div class="col-sm-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas2" value="fiebre">
            <label class="form-check-label" for="gridSintomas2">
              Fiebre
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas3" value="tos">
            <label class="form-check-label" for="gridSintomas3">
              Tos
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas4"
              value="dolorGarganta">
            <label class="form-check-label" for="gridSintomas4">
              Dolor de garganta
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas5"
              value="congestionNasal">
            <label class="form-check-label" for="gridSintomas5">
              Congestion nasal
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas6"
              value="dificultadRespirar">
            <label class="form-check-label" for="gridSintomas6">
              Dificultad para respirar
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas7" value="fatiga">
            <label class="form-check-label" for="gridSintomas7">
              Fatiga
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas8" value="dolorPecho">
            <label class="form-check-label" for="gridSintomas8">
              Dolor de pecho
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas9"
              value="frioPiernas">
            <label class="form-check-label" for="gridSintomas9">
              Frio en las Piernas
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas10"
              value="dolorCabeza">
            <label class="form-check-label" for="gridSintomas10">
              Dolor de Cabeza
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas11" value="vomitos">
            <label class="form-check-label" for="gridSintomas11">
              Vomitos
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas12" value="diarrea">
            <label class="form-check-label" for="gridSintomas12">
              Diarrea
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas13"
              value="enrojecimientoPiel">
            <label class="form-check-label" for="gridSintomas13">
              Enrojecimiento de la piel
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas14"
              value="aumentoPeso">
            <label class="form-check-label" for="gridSintomas14">
              Aumento de peso
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas15"
              value="perdidaPeso">
            <label class="form-check-label" for="gridSintomas15">
              Perdida de peso
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas16"
              value="frioBrazos">
            <label class="form-check-label" for="gridSintomas16">
              Frio en los brazos
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas17"
              value="dolorEspalda">
            <label class="form-check-label" for="gridSintomas17">
              Dolor de espalda
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas18"
              value="dolorCuello">
            <label class="form-check-label" for="gridSintomas18">
              Dolor de cuello
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas19" value="insomnio">
            <label class="form-check-label" for="gridSintomas19">
              Insomnio
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas20"
              value="dolorOrinar">
            <label class="form-check-label" for="gridSintomas20">
              Dolor al orinar
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas21"
              value="hormigueoExtremidades">
            <label class="form-check-label" for="gridSintomas21">
              Hormigeo en las extremidades
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gridSintomas[]" id="gridSintomas22"
              value="inflamacionPiel">
            <label class="form-check-label" for="gridSintomas22">
              Inflamacion en la piel
            </label>
          </div>
        </div>
  </div>
  </fieldset>
  <button type="submit" class="buttons">Enviar</button>
  </form>
  </div>
</body>

</html>