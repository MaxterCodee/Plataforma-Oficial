<x-app-layout>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Exámenes</li>
        </ol>
      </nav>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createExamModal">
        Crear Examen
      </button>
      @include('Mod\CrearExamen')
</x-app-layout>
