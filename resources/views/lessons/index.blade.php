<x-app-layout>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">lessons</li>
        </ol>
      </nav>

      <!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createLessonModal">
    Crear Lección
</button>

<!-- Modal para la creación de lecciones -->
<div class="modal fade" id="createLessonModal" tabindex="-1" aria-labelledby="createLessonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLessonModalLabel">Crear Lección</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para la creación de lecciones -->
                <form action="{{ route('lessons.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="number" class="form-label">Número de Lección</label>
                        <input type="text" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">nombre de Lección</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción de la Lección</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <!-- Campo oculto para pasar el ID de la semana -->
                    <input type="hidden" name="week_id" value="{{ $week->id }}">

                    <button type="submit" class="btn btn-primary">Crear Lección</button>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <h1>Lecciones de la semana: {{ $week->number }}</h1>   
    <!-- Mostrar mensajes de éxito o error -->
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <!-- Lista de lecciones -->
    <div class="row mt-4">
        @foreach ($lessons as $lesson)
            <div class="col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div>
                             <!-- Botón para agregar contenido -->
                        <!-- Button to trigger the modal -->
<button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addContentModal{{ $lesson->id }}">
    Agregar Contenido
</button>

<!-- Modal for creating content -->
<div class="modal fade" id="addContentModal{{ $lesson->id }}" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContentModalLabel">Crear Contenido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para la creación de contenido -->
                <form action="{{ route('content.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">numero del tema</label>
                        <input type="text" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                        <label for="markdown" class="form-label">Contenido del Tema</label>
                        <textarea class="form-control" id="markdown" name="markdown" required></textarea>
                    </div>

                    <!-- Campo oculto para pasar el ID de la lección -->
                    <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">

                    <button type="submit" class="btn btn-primary">Crear Contenido</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    
</script>

                        
                        <h5 class="card-title">Lección {{ $lesson->number }} {{$lesson->name}}</h5>
                     </div>
                        <p class="card-text">{{ $lesson->description }}</p>
                       
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>
</div>


</x-app-layout>