<x-app-layout>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Areas</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Primera columna (2/3) -->
            <div class="col-md-12">
                <!-- Tu contenido va aquí -->

                <h2 class="text-center">Areas</h2>

    {{-- CREAR CARREAR BOTON --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
        Crear Area
    </button><br><br>

    <!-- Modal de creación -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Crear Nueva Area</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de creación -->
                    <form action="{{ route('areas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->

                        <!-- Campo de entrada de texto para el nombre de la carrera -->
                        <div class="mb-3">
                            <label for="nombreCarrera" class="form-label">Nombre de la Area</label>
                            <input type="text" class="form-control" name="name" id="nombreCarrera" placeholder="Ingrese el nombre de la carrera" required>
                        </div>

                        <!-- Campo de carga de archivos para el archivo de la carrera -->
                        <div class="mb-3">
                            <label for="archivoCarrera" class="form-label">Archivo de la Area</label>
                            <textarea class="form-control"name="description" id="description" rows="3"></textarea>
                        </div>

                        <!-- Botones de acción -->
                        <div class="modal-footer">
                            <!-- Botón de cancelar -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <!-- Botón de guardar creación -->
                            <button type="submit" class="btn btn-primary">Crear Area</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($areas as $area)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <!-- Contenedor blanco para cada carrera  -->
                    <div class="card shadow">
                        <div class="card-body d-flex align-items-center">
                            <!-- Primera columna invisible -->
                            <div class="invisible" style="visibility: hidden;"></div>

                            <!-- Segunda columna con la imagen y el título de la carrera -->
                            <div class="d-flex align-items-center">
                                <h5 class="card-title">{{ $area->name }}</h5><br>
                            </div>


                            <!-- Tercera columna con los botones -->
                            {{-- <div class="ms-auto"> --}}
                                &nbsp;



                            <!-- Modal de edición -->
                            <div class="modal fade" id="editModal_{{ $area->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Editar Area</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Formulario de edición -->
                                            <form action="{{ route('areas.update', $area->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Agrega esta línea para especificar que es una solicitud PUT -->

                                                <!-- Campo de entrada de texto -->
                                                <div class="mb-3">
                                                    <label for="nombreCarrera" class="form-label">Nombre del area</label>
                                                    <input type="text" value="{{ $area->name }}" class="form-control" name="name" id="nombreCarrera_{{ $area->id }}" placeholder="Ingrese el nombre de el Area" value="{{ $area->name }}">
                                                </div>

                                                <!-- Campo de carga de archivos -->
                                                <div class="mb-3">
                                                    <label for="archivoCarrera" class="form-label">Descripción del area</label>
                                                    <textarea class="form-control"name="description" id="archivoCarrera_{{ $area->id }}" rows="3">{{ $area->description }}</textarea>
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






                            <!-- Modal de confirmación -->
                            <div class="modal fade" id="confirmModal_{{ $area->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmModalLabel">Confirmar Eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estás seguro de que deseas eliminar el area "{{ $area->name }}"?. <strong>Las carreras asignadas a un area perderan esa asignación</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- Botón de cancelar -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <!-- Botón de confirmar eliminación -->
                                            <form action="{{ route('areas.destroy', $area->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <!-- Botón para abrir el modal -->
                                <button type="button" class="btn btn-invisible" data-bs-toggle="modal" data-bs-target="#editModal_{{ $area->id }}">
                                    <img src="{{ asset('storage/images/icons/wedit.svg') }}" width="35px" class="me-2">
                                </button>

                                <button type="button" class="btn btn-invisible" data-bs-toggle="modal" data-bs-target="#areas_careers{{ $area->id }}">
                                    <img src="{{ asset('storage/images/icons/gteacher.svg') }}" width="35px" class="me-2">
                                </button>

                                <!-- Botón eliminar carrera -->
                                <button type="button" class="btn btn-invisible ms-2" data-bs-toggle="modal" data-bs-target="#confirmModal_{{ $area->id }}">
                                    <img src="{{ asset('storage/images/icons/wdelete.svg') }}" width="35px" class="me-2">
                                </button>
                            </div>


                            {{-- </div> --}}
                        </div>



                    </div>

                </div>
            @endforeach
        </div>
    </div>


            </div>

            {{-- <!-- Segunda columna (1/3) -->
            <div class="col-md-4">
                <h2>Contenido Secundario (1/3)</h2>
                <!-- Tu contenido va aquí -->
                <div class="card shadow">
                    <div class="card-body d-flex align-items-center">
                        <div class="invisible" style="visibility: hidden;"></div>
                        <div class="d-flex align-items-center">
                            <h5 class="card-title">Carrera</h5>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
