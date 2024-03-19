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
                        {{-- <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addContentModal{{ $lesson->id }}">
                            Agregar Contenido
                        </button> --}}

                        <a href="{{ route('content.index', ['lesson' => $lesson->id]) }}" class="btn btn-success btn-sm float-end">
                            Agregar Contenido
                        </a>

                        @include('lessons.modalCreateContent')
                    </div>

                    <h5 class="card-title">Lección {{ $lesson->number }} {{ $lesson->name }}</h5>
                    <p class="card-text">{{ $lesson->description }}</p>
                </div>

                @foreach ($lesson->contents as $content)
                    <div id="content{{ $content->id }}" class="card mt-3 mx-3 col-md-11.5" style="margin-bottom: 15px;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">Tema {{ $content->number }}: {{ $content->title }}</h6>
                            <div class="card-text">
                                @php
                                    // Extract YouTube video ID from content markdown
                                    $youtubeLink = '';
                                    preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $content->markdown, $matches);
                                    if (!empty($matches[1])) {
                                        $youtubeLink = 'https://www.youtube.com/embed/' . $matches[1];
                                    }
                                @endphp

                                {{-- Embed YouTube video --}}
                                @if (!empty($youtubeLink))
                                {!! $content->markdown !!}
                                <div class="embed-responsive embed-responsive-16by9" style="max-width: 800px; height: 450px;">
                                    <iframe class="embed-responsive-item" src="{{ $youtubeLink }}" allowfullscreen style="width: 100%; height: 100%;"></iframe>
                                </div>
                            @else
                                {{-- Display other content --}}
                                {!! $content->markdown !!}
                            @endif
                            
                            
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

<script src="https://www.youtube.com/iframe_api"></script>
<script>
    function YouTubeGetID(url) {
        var ID = "";
        url = url
            .replace(/(>|<)/gi, "")
            .split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
        if (url[2] !== undefined) {
            ID = url[2].split(/[^0-9a-z_\-]/i);
            ID = ID[0];
        } else {
            ID = url;
        }
        return ID;
    }

    // Función para actualizar el campo de texto con el ID del video al perder el foco
    document.getElementById('url_video_input').addEventListener('blur', function () {
        var url = this.value;
        var videoId = YouTubeGetID(url);
        
        // Actualizar el valor del campo de texto con el ID del video
        this.value = videoId;
    });
</script>
