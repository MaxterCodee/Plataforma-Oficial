<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="../resources/css/app.css">  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css"/>

    
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>


<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-warning modal-dialog-scrollable" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Realizar Evaluación Docente
</button>

<!-- Modal -->
<form action="{{route('califProfe')}}" method="POST">
    @csrf
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Evaluación de satisfacción</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol class="list-group list-group list-group-flush">
                        @foreach($QuestionsArray as $Question)
                            <li class="list-group-item">
                                <div class="container-wrapper"> 
                                    <div class="d-flex">
                                        <div class="col py-4 pe-5">
                                            <span>{{$Question->question_content}}</span>
                                        </div>

                                        <div class="justify-content-center">    
                                            <!-- star rating -->
                                            <div class="rating-wrapper">
                                                @for($i = 5; $i >= 1; $i--)
                                                    <input type="radio" id="{{ $Question->id . '-star-rating-' . $i }}" name="{{ 'starRating' . $Question->id }}" value="{{ $i }}">
                                                    <label for="{{ $Question->id . '-star-rating-' . $i }}" class="">
                                                        <i class="fas fa-star fa-xs d-inline-block"></i>
                                                    </label>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <li class="list-group-item">
                            <div class="container-wrapper"> 
                                <div class="d-flex">
                                    <div class="col mt-5">
                                        <span>Comentarios Generales</span>
                                    </div>
                                    <div class="py-3 col-8">
                                        <textarea class="form-control" id="commentary" rows="5" name="commentary" maxlength="250" ></textarea>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://use.fontawesome.com/releases/v5.0.2/js/all.js'></script>
</body>
</html>