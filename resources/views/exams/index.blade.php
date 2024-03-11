<x-app-layout>
  <style>
    .card {
        /* Cambia el tamaño del cuadro */
        width: 80%;
        margin: auto;
    }

    .card-title {
        /* Cambia el tamaño de las letras del título */
        font-size: 1.5em;
    }

    .card-text {
        /* Cambia el tamaño de las letras del texto */
        font-size: 1.2em;
    }
</style>

  <br>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Exámenes</li>
      </ol>
  </nav>

  <div class="d-flex justify-content-between align-items-center mb-3">
      <h1 class="h3">Exámenes</h1>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createExamModal">
          Crear Examen
      </button>
  </div>

  @foreach ($exams as $exam)
      <div class="card mb-3">
          <div class="card-body">
              <h2 class="card-title">{{ $exam->title }}</h2>
              <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="width: 50px; height: 50px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"></path>
            </svg>
              <!-- Aquí puedes agregar más detalles del examen como prefieras -->
              <div class="d-flex justify-content-end">
                  <!-- Botón de editar -->
                  <!-- Botón de editar -->
                <!-- Botón de editar -->
<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#editModal">
  Editar
</button>
@include('Mod\editarExamen')

<!-- Botón de borrar -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Borrar</button>
<form action="{{ route('exams.destroy', $exam->id) }}" method="POST">
  @csrf
  @include('Mod\deleteModal')
</form>


     

              </div>
          </div>
      </div>
  @endforeach

  @include('Mod\CrearExamen')
</x-app-layout>
