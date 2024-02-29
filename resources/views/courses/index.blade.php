<x-app-layout>
  <br>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">courses</li>
      </ol>
  </nav>



    <h2 class="text-center">courses</h2>

  {{-- CREAR CARREAR BOTON --}}
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
      Crear curso
  </button><br><br>
    @include('courses.modalCreate')
  
  <div class="container">
    <div class="row">
        @include('courses.showCourses')
    </div>
</div>

</div>



 
</x-app-layout>

