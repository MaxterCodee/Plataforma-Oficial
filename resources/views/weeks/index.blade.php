<?php
$startDate = new \DateTimeImmutable($course->start_date);
$expirationDate = new \DateTimeImmutable($course->expiration_date);

// Calcula la diferencia en semanas
$interval = $startDate->diff($expirationDate);
$durationInWeeks = ceil($interval->days / 7);

// Array para almacenar los rangos de fechas de cada semana
$weekDateRanges = [];

for ($i = 1; $i <= $durationInWeeks; $i++) {
    // Para la primera semana, inicia en la fecha de inicio del curso
    if ($i === 1) {
        $weekStartDate = $startDate;
    } else {
        // Para las demás semanas, inicia en el próximo lunes
        $weekStartDate = $startDate->add(new DateInterval('P' . (($i - 2) * 7 + 7) . 'D'));
    }

    // Para la última semana, termina en la fecha de cierre del curso
    $weekEndDate = min($expirationDate, $weekStartDate->modify('next Sunday')->setTime(23, 59, 59));

    $weekDateRanges[] = [
        'week_number' => $i,
        'start_date' => $weekStartDate->format('Y-m-d'),
        'end_date' => $weekEndDate->format('Y-m-d'),
    ];
}

// Imprime el array de rangos de fechas
// print_r($weekDateRanges);
?>

<x-app-layout>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">semana curso</li>
        </ol>
      </nav>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<header>
    <div class="card-body d-flex align-items-center mb-2" style="background-color: #94c4f5;">
        <div class="col-4 d-flex align-items-center" style="margin-left: -10px; padding: 10px;">
            @php
                $imageUrl = $course->image_url ? asset($course->image_url) : asset('path/to/default/image.jpg');
            @endphp
            <img src="{{ $imageUrl }}" alt="Imagen del curso" class="img-fluid" style="height: 100%; object-fit: cover;">
        </div>
        <div class="col-4" style="margin-left: -150px; " >
            <h1 style="font-size: 1.75em;">{{ $course->name }}</h1>
         
        </div>

        <div class="col-4" style="background-color: #fbfbfb; border-radius: 10px; height: 50%; width: 500px; margin-left: -5px; padding: 20px;">
            <p>{{ $course->start_date }} -> {{ $course->expiration_date }}</p>
        </div>
        
    </div>
</header>

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

<!-- Botones para abrir los modales -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-1">
            
            <button class="btn btn-primary" data-toggle="modal" data-target="#enfoqueModal">
                Enfoque
            </button>
        </div>
        <div class="col-md-1">
           
            <button class="btn btn-primary" data-toggle="modal" data-target="#objetivosModal">
                Objetivos
            </button>
        </div>
    </div>
</div>



@include('weeks.emptyWeeks')
@include('weeks.weekFill')






</x-app-layout>