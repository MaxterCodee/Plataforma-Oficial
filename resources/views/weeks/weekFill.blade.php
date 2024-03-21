<div id="weekCarousel" class="carousel slide">
    <div class="carousel-inner">
        @foreach($weeks->chunk(3) as $key => $weekChunk)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="row">
                    @foreach($weekChunk as $week)
                        <div class="col-md-4 mb-4">
                            <a href="{{ route('lessons.index', ['week' => $week->id]) }}" style="text-decoration: none; color: inherit;">
                                <div class="card h-100">
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
        @endforeach
    </div>
    


<!-- Índice de semanas -->
<div id="weekIndex" class="d-flex justify-content-center mb-3">
    <ul class="pagination">
        @foreach($weeks->chunk(3) as $key => $weekChunk)
            <li class="page-item">
                <a class="page-link" data-bs-target="#weekCarousel" data-bs-slide-to="{{ $key }}" href="#">{{ $key + 1 }}</a>
            </li>
        @endforeach
    </ul>
</div>
