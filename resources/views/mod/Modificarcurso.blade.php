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
            <form action="{{ route('course.update', $course->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="mb-4">
                <label for="nombreCarrera" class="form-label">Nombre de Curso</label>
                <input type="text" class="form-control" placeholder="Titulo" name="name" id="name"
                  value="{{ $curso->name }}">
              </div>
              <div>
                <label for="description">{{'Descripción'}} </label>
                <textarea class="form-control" placeholder="Descripcion" name="description"
                  id="description">{{ $curso->description }}</textarea>
                @csrf
              </div>

              <div class="modal-footer">
                <button class="btn btn-danger " data-bs-dismiss="modal"
                  style="margin-right: 200px !important;">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar
                  Cambios</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>