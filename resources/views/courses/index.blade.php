<x-app-layout>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cursos</li>
        </ol>
    </nav>
    <h2 class="text-center">CURSOS</h2>

    {{-- CREAR CURSO BOTON --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
        Crear Curso
    </button><br><br>

    <!-- Modal de creación -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Crear Nuevo Curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de creación -->
                    <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->

                        <!-- Campo de entrada de texto para el nombre del Curso -->
                        <div class="mb-3">
                            <label for="nombreCurso" class="form-label">Nombre del Curso</label>
                            <input type="text" class="form-control" name="name" id="nombreCurso" placeholder="Ingrese el nombre del curso" required>
                        </div>

                        <!-- Campo de carga de archivos para el archivo del Curso -->
                        <div class="mb-3">
                            <label for="archivoCurso" class="form-label">Archivo del Curso</label>
                            <input type="file" class="form-control" name="image_url" id="archivoCurso" required>
                        </div>

                        <!-- Botones de acción -->
                        <div class="modal-footer">
                            <!-- Botón de cancelar -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <!-- Botón de guardar creación -->
                            <button type="submit" class="btn btn-primary">Crear Curso</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($courses as $course)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <!-- Contenedor blanco para cada Curso  -->
                    <div class="card shadow">
                        <div class="card-body d-flex align-items-center">
                            <!-- Primera columna invisible -->
                            <div class="invisible" style="visibility: hidden;"></div>

                            <!-- Segunda columna con la imagen y el título del Curso -->
                            <div class="d-flex align-items-center">
                                <img src="{{ asset($course->image_url) }}" width="70px" class="me-2">
                                <h5 class="card-title">{{ $course->name }}</h5>
                            </div>

                            <!-- Tercera columna con los botones -->
                            {{-- <div class="ms-auto"> --}}
                                &nbsp;
                            <!-- Botón para abrir el modal -->
                            <button type="button" class="btn btn-invisible" data-bs-toggle="modal" data-bs-target="#editModal_{{ $course->id }}">
                                <img src="{{ asset('storage/images/icons/wedit.svg') }}" width="35px" class="me-2">
                            </button>

                            <!-- Modal de edición -->
                            <div class="modal fade" id="editModal_{{ $course->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Editar Curso</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Formulario de edición -->
                                            <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Agrega esta línea para especificar que es una solicitud PUT -->

                                                <!-- Campo de entrada de texto -->
                                                <div class="mb-3">
                                                    <label for="nombreCurso" class="form-label">Nombre del Curso</label>
                                                    <input type="text" value="{{ $course->name }}" class="form-control" name="name" id="nombreCurso_{{ $course->id }}" placeholder="Ingrese el nombre del curso" value="{{ $course->name }}">
                                                </div>

                                                <!-- Campo de carga de archivos -->
                                                <div class="mb-3">
                                                    <label for="archivoCurso" class="form-label">Archivo del Curso </label>
                                                    <input type="file" class="form-control" name="image_url" id="archivoCurso_{{ $course->id }}">
                                                </div>

                                                <!-- Botones de acción -->
                                                <div class="modal-footer">
                                                    <!-- Botón de cancelar -->
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <!-- Botón de guardar cambios -->
                                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>



                                &nbsp;

                            <!-- Botón eliminar curso -->
                            <button type="button" class="btn btn-invisible" data-bs-toggle="modal" data-bs-target="#confirmModal_{{ $course->id }}">
                                <img src="{{ asset('storage/images/icons/wdelete.svg') }}" width="35px" class="me-2">
                            </button>

                            <!-- Modal de confirmación -->
                            <div class="modal fade" id="confirmModal_{{ $course->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmModalLabel">Confirmar Eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estás seguro de que deseas eliminar este programa de "{{ $course->name }}"?. <strong>Se eliminarán todos los cursos y exámenes relacionados al programa educativo</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- Botón de cancelar -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <!-- Botón de confirmar eliminación -->
                                            <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- </div> --}}
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
