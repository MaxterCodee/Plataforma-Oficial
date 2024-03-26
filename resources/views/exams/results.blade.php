

<div class="container">
    <h1>Resultados del Examen</h1>
    <p>Tu puntuación es de: {{ $score }}</p>

    <h2>Preguntas correctas</h2>
    <ul>
        @foreach ($correctQuestions as $question)
            <li>{{ $question->text }}</li>
        @endforeach
    </ul>
</div>

