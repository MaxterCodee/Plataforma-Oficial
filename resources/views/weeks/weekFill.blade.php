




<div class="container">
    <div class="row mt-4">
        @foreach($weeks as $week)
            <div class="col-md-4 mb-4">
                <a href="{{ route('lessons.index', ['week' => $week->id]) }}" style="text-decoration: none; color: inherit;">
                    <div class="card h-100"> <!-- Agregando la clase h-100 para establecer la altura al 100% -->
                        <!-- Contenedor para la imagen con dimensiones específicas -->
                        <div class="image-container" style="width: 100%; height: 150px; overflow: hidden;">
                            <img src="{{ $week->image_url }}" class="card-img-top img-fluid" alt="Imagen de la semana">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Week {{ $week->number }} :  {{ $week->course->name }}</h5>
                            <p class="card-text">start: {{ $week->start_date }} <br> end: {{ $week->end_date }} </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


