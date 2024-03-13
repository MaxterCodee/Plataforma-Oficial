@foreach($courses as $course)
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow" style="height: 200px; display: flex; flex-direction: column; justify-content: center;">

            
                <div class="dropdown">
                    <button class="btn btn-sm btn-primary float-end" type="button" id="dropdownMenuButton{{ $course->id }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent; border: transparent; color: black; font-size: 1.5em; padding: 5px 10px;">
                       . . .
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $course->id }}">
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $course->id }}" href="#deleteModal{{ $course->id }}">
                            Eliminar
                        </a>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal{{ $course->id }}" href="#editModal{{ $course->id }}">
                            Editar
                        </a>
                    </div>
                </div>
            

                <div class="card-body d-flex align-items-center mb-5"> <!-- Agregando la clase mt-2 para aumentar el margen superior -->
                    <div class="col-4 d-flex align-items-center" style=" margin-left: -10px; padding:10px;"> <!-- Aplicar clases d-flex y align-items-center aquí -->
                        @php
                            $imageUrl = $course->image_url ? asset($course->image_url) : asset('path/to/default/image.jpg');
                        @endphp
                        <img src="{{ $imageUrl }}" alt="Imagen del curso" class="img-fluid" style="height: 100%; object-fit: cover;">
                    </div>
                    
                    
                
                    <div class="col-8 d-flex align-items-center"> <!-- Aplicar clases d-flex y align-items-center aquí -->
                        <h5 class="card-title" style="font-size: 1em;">
                            <a href="{{ route('weeks.index', ['course' => $course->id]) }}" style="text-decoration: none; color: inherit;">
                                {{ $course->name }}
                            </a>
                        </h5>
                        {{-- <p style="font-size: .5em;">
                            {{ $course->start_date }} -> {{ $course->expiration_date }}
                        </p> --}}
                    </div>
                </div>
                


        </div>
    </div>
@endforeach


