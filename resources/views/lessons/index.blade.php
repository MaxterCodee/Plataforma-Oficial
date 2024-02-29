<x-app-layout>
    <!-- Page Heading -->
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">lessons</li>
        </ol>
    </nav>
    
    <div class="container">
        <div class="row">
            <!-- Sección para mostrar el índice de lecciones -->
            <div class="col-md-3" style="line-height: 2;">
                @include('lessons.lessonsIndex')
            </div>
            <!-- Sección para mostrar las lecciones y contenidos -->
            <div class="col-md-9">
                @include('lessons.lessons')
             </div>
</x-app-layout>

