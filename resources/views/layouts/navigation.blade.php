<style>
    .bg-color {
    background-color: #A7102E; /* Reemplaza RR, GG y BB con los valores hexadecimales de tu color deseado */
    border-radius: 10px; /* Puedes ajustar el valor según la cantidad de redondeo que desees */

}
</style>

<div class="container-fluid">
    <div class="row">
      <!-- Barra lateral -->
      <div class="col-md-3 col-xl-2 bg-dark sidebar">
        <!-- Contenido de tu barra lateral aquí -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark overflow-auto fixed-top"> <!-- Agrega la clase 'fixed-top' aquí -->
            <h1></h1>
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><br><br>
                <img src="{{ asset('storage/images/icons/upq.svg') }}" width="65px" class="me-2" alt="Imagen de menú">
                <span class="fs-5 d-none d-sm-inline">Cursos UPQ</span>
            </a>
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/" class="nav-link align-middle px-0">
                            <img src="{{ asset('storage/images/icons/home.svg') }}" width="25px" class="me-2" alt="Imagen de menú">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <img src="{{ asset('storage/images/icons/gestion.svg') }}" width="25px" >
                            <span class="ms-1 d-none d-sm-inline"> &nbsp;&nbsp;Gestionar</span>
                        </a>
                    </li>


                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">

                            <li class="w-100 d-flex align-items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ asset('storage/images/icons/careers.svg') }}" width="25px" class="me-2">
                                <a href="{{ route('careers.index') }}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Carreras</span>
                                </a>
                            </li>

                            <li class="w-100 d-flex align-items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ asset('storage/images/icons/area.svg') }}" width="25px" class="me-2">
                                <a href="{{ route('areas.index') }}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Areas</span>
                                </a>
                            </li>

                            <li class="w-100 d-flex align-items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ asset('storage/images/icons/teachers.png') }}" width="22px" class="me-2">
                                <a href="{{ route('teachers.index') }}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Profesores</span>
                                </a>
                            </li>

                            <li class="w-100 d-flex align-items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ asset('storage/images/icons/students.png') }}" width="25px" class="me-2">
                                <a href="{{ route('students.index') }}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">Estudiantes</span>
                                </a>
                            </li>

                            <li class="w-100 d-flex align-items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ asset('storage/images/icons/courses.svg') }}" width="22px" class="me-2">
                                <a href="{{ route('courses.index') }}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">&nbsp;Cursos</span>
                                </a>
                            </li>

                            <li class="w-100 d-flex align-items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ asset('storage/images/icons/exams.svg') }}" width="22px" class="me-2">
                                <a href="{{ route('exams.index') }}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">&nbsp;Examenes</span>
                                </a>
                            </li>

                            <li class="w-100 d-flex align-items-center">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ asset('storage/images/icons/encuesta.svg') }}" width="22px" class="me-2">
                                <a href="{{ route('tests.index') }}" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">&nbsp;Encuesta</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
      </div>

      <!-- Barra de navegación -->
      <div class="col-md-9 ml-md-auto col-lg-10 px-4">
        <!-- Contenido principal de tu página aquí -->
        <br>
        <div class="navbar navbar-expand-lg navbar-light bg-color">
            <a class="navbar-brand" href="#">&nbsp;&nbsp; Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color: rgb(250, 250, 250);">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(255, 255, 255);">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(255, 255, 255);">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(255, 255, 255);">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
      </div>
    </div>
  </div>



<div class="container-fluid">
    <div class="row flex-nowrap"><br>



        <div class="col py-3" style="margin-left: 18%;"> <!-- Ajusta el valor del margen según sea necesario -->



            {{-- @section('content')

            {{ $slot }}
            @endsection --}}

        </div>


    </div>
</div>
