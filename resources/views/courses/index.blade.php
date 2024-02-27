<x-app-layout>
  <br>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Regresar</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ Request::path() }}</li>
    </ol>
  </nav>

  <div class="navbar bg-light rounded-3" style="background-color: rgb(0, 45, 112) !important; margin-right: 5px">
    <a class="navbar-brand text-white" href="#" style="font-size: larger;">Curso para Maestros: Nuevas Tecnologías en el
      Aula</a>
    <div class="rounded-right-box float-right" style="width: 56%;
      height: 50px;
      border-radius: 10px; background-color: white">
      <div class="container text-center">
        <div class="row row-cols-2">
          <div class="col text-center" style="font-size: smaller;">PERSONAS INSCRITAS: 000</div>
          <div class="col text-center" style="font-size: smaller;">SEMANAS DEL CURSO: 4</div>
        </div>
        <div class="row row-cols-2 mt-2">
          <div class="col text-center" style="font-size: smaller;">CURSOS TERMINADOS: 000</div>
          <div class="col text-center" style="font-size: smaller;">ADMISTRADOR DEL CURSO:CHRISTIAN
            ROJO</div>
        </div>
      </div>
    </div>
  </div>

  {{-- Container de la vista del curso --}}
  <div class="container-fluid px-4 px-lg-5">
    <!-- Resumen y Aprendizajes del Curso -->
    <div class="row gx-3 gx-lg-3 align-items-center my-3 " style="margin-top: 3% !important;">
      <div div class="col-lg-5 ">
        <h1 class="font-weight-light">Resumen del Curso</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi debitis laborum, quas iste dolores, neque,
          exercitationem

        </p>
      </div>
      <div class="col-lg-1"></div> <!-- Espacio horizontal -->
      <div class="col-lg-5 ">
        <h1 class="font-weight-light">APRENDIZAJES DEL CURSO</h1>
        <li>Integración Tecnológica:</li>
        <li>Diseño de Contenido Multimedia</li>
        <li>Facilitación del Aprendizaje a Distancia:</li>
      </div>
    </div>

    <div class="row gx-4 gx-lg-5" style="margin-top: 3% !important;">
      <div class="col-md-12 mb-5" style="margin-right: 450px;">
        <h1 class="font-weight-light">Semanas de Curso</h1>
      </div>
    </div>

    {{-- cards --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-3 mb-5">
              <div class="card h-80 shadow">
                <img src="{{ asset('img/curso.png') }}" alt="Descripción de la imagen" class="rounded-3">
                <div class="card-body">
                  <h2 class="card-title">Semana 1</h2>
                  <p class="card-text">
                  <ul>
                    <li>Fecha de Inicio: 00:00</li>
                    <li>Fecha de Fin: 00:00</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div> <!-- Espacio horizontal -->
            <div class="col-md-3 mb-5">
              <div class="card h-80 shadow">
                <img src="{{ asset('img/curso.png') }}" alt="Descripción de la imagen" class="rounded-3">
                <div class="card-body">
                  <h2 class="card-title">Semana 2</h2>
                  <p class="card-text">
                  <ul>
                    <li>Fecha de Inicio: 00:00</li>
                    <li>Fecha de Fin: 00:00</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div> <!-- Espacio horizontal -->
            <div class="col-md-3 mb-5">
              <div class="card h-80 shadow">
                <img src="{{ asset('img/curso.png') }}" alt="Descripción de la imagen" class="rounded-3">
                <div class="card-body">
                  <h2 class="card-title">Semana 3</h2>
                  <p class="card-text">
                  <ul>
                    <li>Fecha de Inicio: 00:00</li>
                    <li>Fecha de Fin: 00:00</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crearModal">Evaluacion
      Final</button>
    @push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @endpush

    <button type="button" class="btn btn-primary position-absolute top-0 end-0"
      style="width: 30px; height: 30px; padding: 6px 0px; border-radius: 15px; text-align: center; font-size: 12px; line-height: 1.42857; margin-top: 380px; margin-right: 50px; background-color: rgb(0, 45, 112);"
      data-bs-toggle="modal" data-bs-target="#modificarvista">
      <i class="fas fa-plus"></i>
    </button>
  </div>
  @include('Mod.CrearVista')
  @include('Mod.ModificarVista')
</x-app-layout>