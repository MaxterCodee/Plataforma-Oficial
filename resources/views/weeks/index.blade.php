<x-app-layout>
    {{-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">semana curso</li>
        </ol>
    </nav> --}}
    <div class="container-fluid bg-info p-3 pe-4 mb-3">
        <div class="row d-flex align-items-center">
            <div class="col text-light">
                <h1>Contenido del curso:<br>{{ $course->name }}</h1>
            </div>
            <div class="col bg-light p-3 rounded-4">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <p class="card-text"><b>Personas Inscritas:</b> 4000</p>
                            <p class="card-text"><b>Semanas del Curso:</b> 1 semana</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <p class="card-text"><b>Semanas Terminadas:</b> 3 Semanas</p>
                            <p class="card-text"><b>Administrador del curso:</b> Sebastian Ramirez Garcia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#createWeekModal">
        Crear Semana
    </button>
    <!-- Modal para la creación de semanas -->
    <div class="modal fade" id="createWeekModal" tabindex="-1" aria-labelledby="createWeekModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createWeekModalLabel">Create Week</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para la creación de semanas -->
                    <form action="{{ route('weeks.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="numero" class="form-label">Week Number</label>
                            <input type="text" class="form-control" id="numero" name="number" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <!-- No es necesario un campo para el course_id ya que se asignará automáticamente -->

                        <input type="hidden" name="course_id" value="{{ $course->id }}">

                        <button type="submit" class="btn btn-primary">Create Week</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Resumen del Curso</h2>
                <p>{{$course->description}}</p>
            </div>
            <div class="col">
                <h2 class="text-center">Aprendizajes del Curso</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </div>
        
    </div>

    {{-- Contenedor de Semanas --}}
    <div class="container-fluid">
        <h2 class="text-center">Semanas</h2>
        <div class="row mt-4">
            @foreach($weeks as $week)
            <div class="col-md-3 mb-4">
                <a href="{{ route('lessons.index', ['week' => $week->id]) }}"
                    style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <!-- Contenedor para la imagen con dimensiones específicas -->
                        <div class="image-container" style="width: 100%; height: 150px; overflow: hidden;">
                            {{-- <img src="{{ $week->image_url }}" class="card-img-top img-fluid" alt="Imagen de la semana"> --}}
                            <img src="{{ asset('img/course_example.png') }}" class="card-img-top img-fluid" alt="Imagen de la semana">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Semana {{ $week->number }}</h5>
                            <p class="card-text pb-2">{{ $week->description }}<br><b>Curso: </b>{{ $week->course->name }}</p>
                            <!-- Puedes mostrar más detalles según tus necesidades -->
                            <a href="#" class="btn btn-primary justify-end">Ver Detalles</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
</x-app-layout>