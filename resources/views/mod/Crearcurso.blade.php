<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Curso</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

  <div class="mb-4">
    <div class="col-auto ml-2">
      <div class="input-group">
        <label for="fechaFin" class="input-group-text mr-2">Fin</label>
        <input type="date" id="fechaFin" class="form-control border border-dark" style="max-width: 150px;">
      </div>
    </div>
    <!--Competencias -->
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="hstack gap-3">
          <div class="p-1">
            <h5>Competencias</h5>
          </div>
          <div class="p-3 ms-auto">
            <button class="btn btn-lg" style="width: 100%; height: 100%; border: none; background: none;">
              <i class="fas fa-plus-square" style="color: #002d72;"></i>
            </button>
          </div>
        </div>
        <div class="mb-4">
          <div class="hstack gap-3">
            <div class="p-2">
              <input type="text" class="form-control" style="width: 150px;" placeholder="Competencia 1">
            </div>
          </div>
        </div>
      </div>
      <!--Semanas-->
      <div class="d-flex align-items-center mt-4">
        <h4 class="mr-2">Semana de Curso</h4>
        <input id="semana-curso" type="number" min="0" max="10" class="form-control w-25" placeholder="max:10">
      </div>
      <ul id="lista-semanas" class="list-unstyled text-sm">
        <li class="font-weight-bold ml-5 mb-2">Semana 1</li>
        <li>
          <div class="row">
            <div class="col-auto ml-2">
              <div class="input-group">
                <label for="fechaInicio" class="input-group-text mr-2">Inicio</label>
                <input type="date" id="fechaInicio" class="form-control border border-dark" style="max-width: 150px;">
              </div>
            </div>
            <div class="col-auto ml-2">
              <div class="input-group">
                <label for="fechaFin" class="input-group-text mr-2">Fin</label>
                <input type="date" id="fechaFin" class="form-control border border-dark" style="max-width: 150px;">
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>

  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
</body>

</html>