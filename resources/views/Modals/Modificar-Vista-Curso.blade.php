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
  <div class="container mt-4">


    <div class="modal fade" id="modificarvista" data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-center ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modifcar Datos</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <h1>Modificar Datos</h1>
            <div class="mb-4">
              <h5>Titulo</h5>
              <input type="text" class="form-control" placeholder="Titulo">
            </div>
            <div>
              <h5>Descripcion</h5>
              <textarea class="form-control" placeholder="Descripcion"></textarea>
            </div>
            <div class="mb-4">
              <h5>Personas Inscritas</h5>
              <input type="text" class="form-control" placeholder="Personas Inscritas">
            </div>
            <div class="mb-4">
              <h5>Semanas del Curso</h5>
              <input type="number" class="form-control" placeholder="Semana del Curso">
            </div>
            <div class="mb-4">
              <h5>Cursos Terminados</h5>
              <input type="text" class="form-control" placeholder="Cursos Terminados">
            </div>
            <div class="mb-4">
              <h5>Administrador del Curso</h5>
              <input type="text" class="form-control" placeholder="Administrador del Curso">
            </div>
            <!--Competencias -->
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="hstack gap-3">
                  <div class="p-2">
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
                    <div class="p-3" style="margin-left: 0px">
                      <button class="btn btn-lg" style="width: 100%; height: 100%; border: none; background: none;">
                        <i class="fas fa-minus-square" style="color: #ba0c2f;"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--Semanas-->
              <div class="d-flex align-items-center mt-4">
                <h4 class="mr-2">Semana de Curso</h4>
                <input id="semana-curso" type="number" min="0" max="  10" class="form-control w-25"
                  placeholder="max:10">
              </div>
              <ul id="lista-semanas" class="list-unstyled text-sm">
                <li class="font-weight-bold ml-5 mb-2">Semana 1</li>
                <li>
                  <div class="row">
                    <div class="col-auto ml-2">
                      <div class="input-group">
                        <label for="fechaInicio" class="input-group-text mr-2">Inicio</label>
                        <input type="date" id="fechaInicio" class="form-control border border-dark"
                          style="max-width: 150px;">
                      </div>
                    </div>
                    <div class="col-auto ml-2">
                      <div class="input-group">
                        <label for="fechaFin" class="input-group-text mr-2">Fin</label>
                        <input type="date" id="fechaFin" class="form-control border border-dark"
                          style="max-width: 150px;">
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger " data-bs-dismiss="modal"
                style="margin-right: 200px !important;">Cancelar</button>
              <button class="btn btn-primary" style="margin-right: 30px;">Guardar</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @vite('resources/js/ModalModf.js')
</body>

</html>