<!-- Modal for creating content -->
<div class="modal fade" id="addContentModal{{ $lesson->id }}" tabindex="-1" aria-labelledby="addContentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
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
                        <label for="name" class="form-label">numero del tema</label>
                        <input type="text" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                        <label for="markdown" class="form-label">Contenido del Tema</label>
                        <textarea class="form-control" id="markdown" name="markdown" required></textarea>
                    </div>

                    <!-- Campo oculto para pasar el ID de la lección -->
                    <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">

                    <button type="submit" class="btn btn-primary">Crear Contenido</button>
                </form>
            </div>
        </div>
    </div>
</div>
