<div class="modal fade" id="editModal{{ $course->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $course->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $course->id }}">Editar Curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición -->
                <form action="{{ route('courses.update', ['id' => $course->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Campos de entrada -->
                    <div class="mb-3">
                        <label for="nombreCurso" class="form-label">Nombre del curso</label>
                        <input type="text" class="form-control" name="name" id="nombreCurso" value="{{ $course->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcionCurso" class="form-label">Descripción del curso</label>
                        <textarea class="form-control" name="description" id="descripcionCurso" rows="4" required>{{ $course->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="objetivosCurso" class="form-label">Objetivos del curso</label>
                        <textarea class="form-control" name="course_objectives" id="objetivosCurso" rows="4" required>{{ $course->course_objectives }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="fechaInicio" class="form-label">Fecha de inicio</label>
                        <input type="date" class="form-control" name="start_date" id="fechaInicio" value="{{ $course->start_date }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="fechaExpiracion" class="form-label">Fecha de Expiración</label>
                        <input type="date" class="form-control" name="expiration_date" id="fechaExpiracion" value="{{ $course->expiration_date }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="estadoCurso" class="form-label">Estado del curso</label>
                        <input type="number" class="form-control" name="status" id="estadoCurso" value="{{ $course->status }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="imagenCurso" class="form-label">Imagen del curso</label>
                        <input type="file" class="form-control" name="image_upload" id="imagenCurso">
                    </div>

                    <!-- Botones de acción -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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
            .create(document.querySelector('#descripcionCurso'))
            .then(editor => {
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });

        // Inicializa CKEditor
        ClassicEditor
            .create(document.querySelector('#objetivosCurso'))
            .then(editor => {
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    });
</script> 
