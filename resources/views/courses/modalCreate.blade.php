<!-- Modal de creación -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Agrega la clase modal-lg para hacerlo un large modal -->
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
                        <textarea class="form-control" name="description" id="editor" rows="5" cols="50"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="course_objectives" class="form-label">objetivos del curso</label>
                        <textarea class="form-control" id="editor1" name="course_objectives" rows="5" cols="50"></textarea>
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <label for="start_date" class="form-label">Fecha de inicio:</label>
                            <input type="date" name="start_date" class="form-control" id="start_date">
                        </div>
                        <div class="col">
                            <label for="expiration_date" class="form-label">Fecha de Expiración:</label>
                            <input type="date" name="expiration_date" class="form-control" id="expiration_date">
                        </div>
                    </div>
                    

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <input type="number" name="status" id="statusCourse">
                    </div>

                    <div class="mb-3">
                        <label for="cargarImagen" class="form-label">Cargar Imagen:</label>
                        <input type="file" name="image_upload" class="form-control" id="cargarImagen">
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


<script src="/ckeditor5/build/ckeditor.js"></script> 
 <script>
    // Espera a que el DOM esté completamente cargado
    document.addEventListener("DOMContentLoaded", function() {
        // Inicializa CKEditor
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    });


    document.addEventListener("DOMContentLoaded", function() {
        // Inicializa CKEditor
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(editor => {
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    });
</script> 