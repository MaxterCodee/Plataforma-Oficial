<h2>Índice de Lecciones</h2>
                <ul>
                    @foreach ($lessons as $lesson)
                    <li>
                        <a href="#lesson{{ $lesson->id }}">Lección {{ $lesson->number }} - {{ $lesson->name }}</a>
                        <ul style="margin-top: 5px;"> <!-- Agregar margen superior para separar lección de contenido -->
                            @foreach ($lesson->contents as $content)
                                <li>
                                    <a href="#content{{ $content->id }}">tema {{ $content->number }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                
                </ul>