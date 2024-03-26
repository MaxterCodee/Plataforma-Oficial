<h1>Examen ID: {{ $exam->id }}</h1>
<h2>{{ $exam->title }}</h2>

<form action="{{ route('exams.solve', $exam->id) }}" method="POST">
    @csrf
    @foreach ($questions as $question)
        <p>Pregunta: {{ $question->ask }}</p>
        @foreach ($question->answers as $answer)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="answers[{{ $question->id }}]" value="{{ $answer->id }}">
                <label class="form-check-label">
                    {{ $answer->option }}
                </label>
            </div>
        @endforeach
    @endforeach
    <button type="submit" class="btn btn-primary">Enviar respuestas</button>
</form>
