<x-app-layout>
  <br>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">GESTION DE CURSOS</li>
      </ol>
  </nav>


  <div class="row mb-5" >
    <div class="col-6">
        <h2>GESTION DE CURSOS</h2>
    </div>
    <div class="col-6 text-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Crear curso
        </button>
    </div>
</div>

  {{-- CREAR CARREAR BOTON --}}
 
    @include('courses.modalCreate')
  
  <div class="container">
    <div class="row">
        @include('courses.showCourses')
    </div>
</div>

</div>



 
</x-app-layout>

