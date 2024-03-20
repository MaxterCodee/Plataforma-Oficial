<x-app-layout>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">semana curso</li>
        </ol>
    </nav>

    <h1>Semanas del curso: {{ $course->name }}</h1>
    
    <!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createWeekModal">
Create Week
</button>

<!-- Modal para la creación de semanas -->
<div class="modal fade" id="createWeekModal" tabindex="-1" aria-labelledby="createWeekModalLabel" aria-hidden="true">
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


<div class="container">

<div class="row mt-4">
    @foreach($weeks as $week)
    <div class="col-md-4 mb-4">
        <a href="{{ route('lessons.index', ['week' => $week->id]) }}" style="text-decoration: none; color: inherit;">
            <div class="card">
                <!-- Contenedor para la imagen con dimensiones específicas -->
                <div class="image-container" style="width: 100%; height: 150px; overflow: hidden;">
                    <img src="{{ $week->image_url }}" class="card-img-top img-fluid" alt="Imagen de la semana">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Week {{ $week->number }}</h5>
                    <p class="card-text">{{ $week->description }}</p>
                    <p class="card-text">Course: {{ $week->course->name }}</p>
                    <!-- Puedes mostrar más detalles según tus necesidades -->
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>


<!-- Boton para mostrar el model de realizar evaluacion docente -->
<button type="button" class="btn btn-warning modal-dialog-scrollable" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Realizar Evaluación Docente
</button>

<!-- Modal de evaluacion docente -->
<form action="{{route('pruebaDocente')}}" method="POST">
    @csrf
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Evaluación de satisfacción</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <input type="number" value="{{$course->id}}" hidden name="CourseId">

                    <ol class="list-group list-group list-group-flush">
                        @foreach($questions as $question)
                            <li class="list-group-item">
                                <div class="container-wrapper"> 
                                    <div class="d-flex">
                                        <div class="col mt-4">
                                            <span>{{$question->question_content}}</span>
                                        </div>

                                        <div class="justify-content-center">    
                                            <!-- star rating -->
                                            <div class="rating-wrapper">
                                                @for($i = 5; $i >= 1; $i--)
                                                    <input type="radio" id="{{ $question->id . '-star-rating-' . $i }}" name="{{ 'starRating' . $question->id }}" value="{{ $i }}">
                                                    <label for="{{ $question->id . '-star-rating-' . $i }}" class="">
                                                        <i class="fas fa-star fa-xs d-inline-block"></i>
                                                    </label>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://use.fontawesome.com/releases/v5.0.2/js/all.js'></script>


</x-app-layout>