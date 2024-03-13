

<div class="container">
    <h2 class="mt-4 mb-4">Índice</h2>
    <ul class="list-unstyled">
        @foreach ($lessons as $lesson)
            <li class="mb-3">
                <h5>
                    <a href="#lesson{{ $lesson->id }}" class="text-dark">
                        Lección {{ $lesson->number }} - {{ $lesson->name }}
                    </a>
                </h5>
                <ul class="list-unstyled ml-3">
                    @foreach ($lesson->contents as $content)
                        <li>
                            <div class="border-left pl-2 mb-2">
                                <a href="#content{{ $content->id }}" class="text-muted">
                                    Tema {{ $content->number }} :  {{ $content->title }}
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>


