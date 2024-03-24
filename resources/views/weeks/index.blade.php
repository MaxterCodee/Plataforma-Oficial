<x-app-layout>
    
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />


{{-- header del curso (imagen/nombre/especificaciones) --}}
<header>
    <div class="card-body d-flex align-items-center mb-2" style="background-color: #94c4f5; padding: 10px;">
        <div class="col-2 d-flex align-items-center">
            {{-- seccion para la imagen del curso --}}
            @php
                $imageUrl = $course->image_url ? asset($course->image_url) : asset('path/to/default/image.jpg');
            @endphp
            <img src="{{ $imageUrl }}" alt="Imagen del curso" class="img-fluid" style="height: 100%; object-fit: cover; margin-right: 10px;">
        </div>
        {{-- seccion para el nombre del curso --}}
        <div class="col-5">
            <h1 style="font-size: 1.75em; margin: 0; text-align: left;">{{ $course->name }}</h1>
        </div>
    {{-- seccion de las especificaciones del curso --}}
        <div class="col-5">
            <div class="info-card" style="background-color: #fff; color: #333; padding: 10px; border-radius: 5px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2" style="align-items:center; display: flex;">
                                <i class="lni lni-user" style="font-size: 24px;"></i>
                            </div>
                            <div class="col-md-10">
                                <div><strong>Administrador</strong></div>
                                <div>Christian Rojo</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2" style="align-items:center; display: flex;">
                                <i class="lni lni-certificate" style="font-size: 30px;"></i>
                            </div>
                            <div class="col-md-10">
                                <div><strong>Especialidad</strong></div>
                                <div>Sistemas Computacionales</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2" style="align-items:center; display: flex;">
                                <i class="lni lni-thumbs-up" style="font-size: 24px;"></i>
                            </div>
                            <div class="col-md-10">
                                <div><strong>Calificación del Curso</strong></div>
                                <div>9.2</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="row">
                            <div class="col-md-2" style="align-items:center; display: flex;">
                                <i class="lni lni-users" style="font-size: 30px;"></i>
                            </div>
                            <div class="col-md-10" >
                                <div><strong>Usuarios Inscritos</strong></div>
                                <div>76</div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2" style="align-items: center; display: flex;">
                            <i class="lni lni-calendar" style="font-size: 25px;"></i>
                        </div>
                        <div class="col-md-10" >
                            <div><strong>Duración del Curso</strong></div>
                            <div>Inicio: {{ $course->start_date }}  Fin: {{ $course->expiration_date }}</div>
                        </div>
                    </div>
                </div> --}}
            </div>
            </div>
        </div>
        
    </div>
</header>


<div style="margin-top: 10px; margin-bottom: 20px;">
    <h1>INTRODUCCIÓN AL CURSO</h1>
</div>

<!-- Botones para abrir los modales -->
<div class="container mt-0" style="margin-top: 2px;">
    <div class="row">
        <div class="col-md-1">
            <button class="btn btn-primary mx-2" data-toggle="modal" data-target="#enfoqueModal" >
                Enfoque
            </button>
        </div>
        <div class="col-md-1">
            <button class="btn btn-primary mx-4" data-toggle="modal" data-target="#objetivosModal">
                Objetivos
            </button>
        </div>
    </div>
</div>


<div style="margin-top: 10px;">
    <h1>SEMANAS</h1>
</div>

@include('weeks.weekFill')

<!-- Modal para Enfoque -->
<div class="modal fade" id="enfoqueModal" tabindex="-1" role="dialog" aria-labelledby="enfoqueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enfoqueModalLabel">Enfoque</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-text">{!! $course->description  !!}</div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Objetivos -->
<div class="modal fade" id="objetivosModal" tabindex="-1" role="dialog" aria-labelledby="objetivosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="objetivosModalLabel">Objetivos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-text">{!! $course->course_objectives  !!}</div>
            </div>
        </div>
    </div>
</div>




</x-app-layout>