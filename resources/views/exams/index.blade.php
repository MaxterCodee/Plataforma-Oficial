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

      @foreach ($exams as $exam)
    <div>
        <h2>{{ $exam->title }}</h2>
        <p>{{ $exam->status }}</p>
        <!-- Aquí puedes agregar más detalles del examen como prefieras -->

        <!-- Botón de editar -->
        <a href="{{ route('exams.show', $exam->id) }}" class="btn btn-primary">
          Editar
          @include('exams.show')
      </a>
        <!-- Botón de borrar -->
        <form action="{{ route('exams.destroy', $exam->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </div>
@endforeach

      @include('Mod\CrearExamen')

      
</x-app-layout>
