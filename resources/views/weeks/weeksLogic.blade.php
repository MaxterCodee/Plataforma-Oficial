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