<!-- Modal de creación -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Crear Nuevo curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de creación -->
                <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->

                    <!-- Campo de entrada de texto para el nombre de la carrera -->
                    <div class="mb-3">
                        <label for="nombreCurso" class="form-label">Nombre del curso</label>
                        <input type="text" class="form-control" name="name" id="nombreCurso" placeholder="Ingrese el nombre del curso" required>
                    </div>

                    <!-- Campo de carga de archivos para el archivo de la carrera -->
                    <div class="mb-3">
                        <label for="archivoCurso" class="form-label">descripcion del curso</label>
                        <textarea class="form-control"name="description" id="description" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                      <label for="fechaExpiracion" class="form-label">Fecha de Expiración:</label>
                      <input type="date" name="expiration_date" class="form-control" id="fechaExpiracion">
                  </div>
                  <div class="mb-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="number" name="status" id="statusCourse">
                </div>
                <div class="mb-3">
                  <label for="urlImagen" class="form-label">URL de la Imagen:</label>
                  <input type="text" name="image_url" class="form-control" id="urlImagen" placeholder="Ingrese la URL de la imagen">
              </div>

                    <!-- Botones de acción -->
                    <div class="modal-footer">
                        <!-- Botón de cancelar -->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <!-- Botón de guardar creación -->
                        <button type="submit" class="btn btn-primary">Crear curso</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>