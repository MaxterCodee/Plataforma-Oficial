@if($courses->isEmpty())
    <p>No hay cursos disponibles.</p>
@else
@foreach($courses as $course)
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card shadow" style="height: 200px; display: flex; flex-direction: column; justify-content: center;">
        <div class="dropdown">
            <button class="btn btn-sm btn-primary float-end" type="button" id="dropdownMenuButton{{ $course->id }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent; border: transparent; color: black; font-size: 1.5em; padding: 5px 10px;">
               . . .
            </button>
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $course->id }}">
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteCourseModal{{ $course->id }}">
                    Eliminar
                </a>
                
                <!-- Botón para abrir modal de edición -->
                <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal{{ $course->id }}">
                    Editar
                </button>
            </div>
        </div>

        <div class="card-body d-flex align-items-center mb-5">
            <div class="col-4 d-flex align-items-center" style="margin-left: -10px; padding:10px;">
                @php
                    $imageUrl = $course->image_url ? asset($course->image_url) : asset('path/to/default/image.jpg');
                @endphp
                <img src="{{ $imageUrl }}" alt="Imagen del curso" class="img-fluid" style="height: 100%; object-fit: cover;">
            </div>
            
            <div class="col-8 d-flex align-items-center">
                <h5 class="card-title" style="font-size: 1em;">
                    <a href="{{ route('weeks.index', ['course' => $course->id]) }}" style="text-decoration: none; color: inherit;">
                        {{ $course->name }}
                    </a>
                </h5>
            </div>
        </div>
    </div>
</div>
@endforeach


@include('courses.modalDestroy', ['course' => $course])
@include('courses.modalUpdate', ['course' => $course])

@endif


