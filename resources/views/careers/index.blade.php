<x-app-layout>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Carreras</li>
        </ol>
    </nav>
    <h2 class="text-center">Carreras</h2>

    {{-- CREAR CARREAR BOTON --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
        Crear Carrera
    </button><br><br>

    <!-- Modal de creación -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Crear Nueva Carrera</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de creación -->
                    <form action="{{ route('careers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->

                        <!-- Campo de entrada de texto para el nombre de la carrera -->
                        <div class="mb-3">
                            <label for="nombreCarrera" class="form-label">Nombre de la Carrera</label>
                            <input type="text" class="form-control" name="name" id="nombreCarrera" placeholder="Ingrese el nombre de la carrera" required>
                        </div>

                        <!-- Campo de carga de archivos para el archivo de la carrera -->
                        <div class="mb-3">
                            <label for="archivoCarrera" class="form-label">Archivo de la Carrera</label>
                            <input type="file" class="form-control" name="image_url" id="archivoCarrera" required>
                        </div>

                        <!-- Botones de acción -->
                        <div class="modal-footer">
                            <!-- Botón de cancelar -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <!-- Botón de guardar creación -->
                            <button type="submit" class="btn btn-primary">Crear Carrera</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($careers as $career)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <!-- Contenedor blanco para cada carrera  -->
                    <div class="card shadow">
                        <div class="card-body d-flex align-items-center">
                            <!-- Primera columna invisible -->
                            <div class="invisible" style="visibility: hidden;"></div>

                            <!-- Segunda columna con la imagen y el título de la carrera -->
                            <div class="d-flex align-items-center">
                                <img src="{{ asset($career->image_url) }}" width="70px" class="me-2">
                                <h5 class="card-title">{{ $career->name }}</h5>
                            </div>

                            <!-- Tercera columna con los botones -->
                            {{-- <div class="ms-auto"> --}}
                                &nbsp;
                            <!-- Botón para abrir el modal -->
                            <button type="button" class="btn btn-invisible" data-bs-toggle="modal" data-bs-target="#editModal_{{ $career->id }}">
                                <img src="{{ asset('storage/images/icons/wedit.svg') }}" width="35px" class="me-2">
                            </button>

                            <!-- Modal de edición -->
                            <div class="modal fade" id="editModal_{{ $career->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Editar Carrera</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Formulario de edición -->
                                            <form action="{{ route('careers.update', $career->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Agrega esta línea para especificar que es una solicitud PUT -->

                                                <!-- Campo de entrada de texto -->
                                                <div class="mb-3">
                                                    <label for="nombreCarrera" class="form-label">Nombre de la Carrera</label>
                                                    <input type="text" value="{{ $career->name }}" class="form-control" name="name" id="nombreCarrera_{{ $career->id }}" placeholder="Ingrese el nombre de la carrera" value="{{ $career->name }}">
                                                </div>

                                                <!-- Campo de carga de archivos -->
                                                <div class="mb-3">
                                                    <label for="archivoCarrera" class="form-label">Archivo de la Carrera</label>
                                                    <input type="file" class="form-control" name="image_url" id="archivoCarrera_{{ $career->id }}">
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

                            <!-- Botón eliminar carrera -->
                            <button type="button" class="btn btn-invisible" data-bs-toggle="modal" data-bs-target="#confirmModal_{{ $career->id }}">
                                <img src="{{ asset('storage/images/icons/wdelete.svg') }}" width="35px" class="me-2">
                            </button>

                            <!-- Modal de confirmación -->
                            <div class="modal fade" id="confirmModal_{{ $career->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmModalLabel">Confirmar Eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estás seguro de que deseas eliminar este programa de "{{ $career->name }}"?. <strong>Se eliminarán todos los cursos y exámenes relacionados al programa educativo</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- Botón de cancelar -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <!-- Botón de confirmar eliminación -->
                                            <form action="{{ route('careers.destroy', $career->id) }}" method="post">
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
