<x-app-layout>
  <br>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Regresar</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ Request::path() }}</li>
    </ol>
  </nav>

  <div class="row text-center text-black" style="height:900px;">
    <!-- Div para el contenido principal -->
    <div class="col-sm-2 bg-white order-2 order-sm-1 h-100">
      <div class="container-fluid border">

        <!-- Botones de inicio y cursos -->
        <div class="mt-4">
          <button class="btn btn-outline-secondary">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 32 32"
              xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
              style="width: 20px; height: 20px; margin-right: 5px;">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
              </path>
            </svg>
            Iniciar
          </button>
        </div>

        <div class="mt-3">
          <button class="btn btn-outline-secondary">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 32 32"
              xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
              style="width: 20px; height: 20px; margin-right: 5px;">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
              </path>
            </svg>
            Mis cursos
          </button>
        </div>

        <!-- Lista de cursos -->
        <div class="mt-4">
          <div class="mt-4">
            <p>Nombre del curso</p>
          </div>
          <div class="mt-4">
            <p>Nombre del curso</p>
          </div>
          <div class="mt-4">
            <p>Nombre del curso</p>
          </div>
          <div class="mt-4">
            <p>Nombre del curso</p>
          </div>
        </div>

        <!-- Botón de cursos inactivos -->
        <div class="row justify-content-center align-items-end">
          <button class="btn btn-outline-secondary">CURSOS INACTIVOS</button>
        </div>
      </div>
    </div>

    <!-- Div para el contenido secundario -->
    <div class="col-sm-10 bg-white order-1 order-sm-2 h-100">
      <div class="container d-flex">
        <div class="row justify-content-center mt-2">
          <!-- Primera fila -->
          <div class="col-md-6 mb-3 mt-5 mr-5 order-md-1">
            <!-- Espacio para la primera tarjeta -->
            <div class="card mb-3 flex-grow-1">
              <!-- Contenido de la primera tarjeta -->
              <div class="row g-0">
                <div class="col-md-4 d-flex justify-content-center align-items-center bg-danger">
                  {{-- <a href="{{ route('vistacurso') }}"> --}}
                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5">
                      </path>
                    </svg>
                  </a>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del curso</h5>
                    <p class="card-text">Mtro. CHRISTIAN ROJO </p>
                    <p class="card-text">2023-11-20/2023-12-31 </p>
                  </div>
                </div>
              </div>
              <a href="{{ route('courses.index') }}"
                class="btn btn-transparent position-absolute top-0 start-0 w-100 h-100"></a>
            </div>
          </div>
          <div class="col-md-6 mb-3 mt-5  order-md-2 flex">
            <!-- Espacio para la segunda tarjeta -->
            <div class="card mb-3 w-100">
              <!-- Contenido de la segunda tarjeta -->
              <div class="row g-0">
                <div class="col-md-4 d-flex justify-content-center align-items-center bg-primary">
                  <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5">
                    </path>
                  </svg>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del curso</h5>
                    <p class="card-text">Mtro. CHRISTIAN ROJO </p>
                    <p class="card-text">2023-11-20/2023-12-31 </p>
                  </div>
                </div>
              </div>
              <a href="{{ route('courses.index') }}"
                class="btn btn-transparent position-absolute top-0 start-0 w-100 h-100"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>