<div class="d-flex justify-content-between">
    <div>
        <h1>Lecciones de la semana: {{ $week->number }}</h1>
    </div>
    <div>
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createLessonModal">
            Crear Lección
        </button>

        @include('lessons.modalCreateLesson')
    </div>
</div>

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
            <div id="lesson{{ $lesson->id }}" class="card h-100">
                <div class="card-body">
                    <!-- Botón para agregar contenido -->
                    <div>
                    <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addContentModal{{ $lesson->id }}">
                        Agregar Contenido
                    </button>
                    @include('lessons.modalCreateContent')
                    </div>

                    <h5 class="card-title">Lección {{ $lesson->number }} {{ $lesson->name }}</h5>
                    <p class="card-text">{{ $lesson->description }}</p>
                </div>

                @foreach ($lesson->contents as $content)
                <div id="content{{ $content->id }}" class="card mt-3 mx-3 col-md-11.5" style="margin-bottom: 15px;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Tema: {{ $content->number }}</h6>
                       
                        <div class="card-text">{!! $content->markdown !!}</div>
                    </div>
                </div>
            @endforeach
            
            </div>
        </div>
    @endforeach
</div>
</div>
</div>


