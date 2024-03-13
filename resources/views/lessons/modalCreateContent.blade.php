
<!-- Modal for creating content -->
<div class="modal fade fullscreen-modal my-custom-modal" id="addContentModal{{ $lesson->id }}" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContentModalLabel">Crear Contenido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para la creación de contenido -->
                <form action="{{ route('content.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">titulo del tema</label>
                        <input type="text" class="form-control" id="title" name="title" required>

                    </div>

                    <div class="mb-3">
                        <label for="markdown" class="form-label">Contenido del Tema</label>
                        <textarea class="form-control" id="editor{{ $lesson->id }}" name="markdown" rows="10" cols="100"></textarea>
                    </div>
                   
                    <!-- Campo oculto para pasar el ID de la lección -->
                    <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">

                    <button type="submit" class="btn btn-primary">Crear Contenido</button>
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
            .create(document.querySelector('#editor{{ $lesson->id }}'))
            .then(editor => {
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    });
</script> 




