@foreach($courses as $course)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <!-- Contenedor blanco para cada carrera  -->
            <a href="{{ route('weeks.index', ['course' => $course->id]) }}" style="text-decoration: none; color: inherit;">
                <div class="card shadow">
                    <div class="card-body d-flex align-items-center">
                        <!-- Columna para la imagen del curso -->
                        <div class="col-4">
                            <!-- Agrega aquí la lógica para mostrar la imagen del curso -->
                            <img src="{{ $course->image_url }}" alt="Imagen del curso" class="img-fluid">
                        </div>

                        <!-- Columna para los detalles del curso -->
                        <div class="col-8">
                            <h5 class="card-title">{{ $course->name }}</h5>
                            <p>Descripción: {{ $course->description }}</p>
                            <p>Fecha de inicio: {{ $course->start_date }}</p>
                            <p>Fecha de caducidad: {{ $course->expiration_date }}</p>
                            <p>Estado: {{ $course->status }}</p>

                            <!-- Puedes agregar más detalles según tus necesidades -->
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach