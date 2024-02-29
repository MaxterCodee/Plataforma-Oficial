<!-- Modal para la creación de lecciones -->
<div class="modal fade" id="createLessonModal" tabindex="-1" aria-labelledby="createLessonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLessonModalLabel">Crear Lección</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para la creación de lecciones -->
                <form action="{{ route('lessons.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="number" class="form-label">Número de Lección</label>
                        <input type="text" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">nombre de Lección</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción de la Lección</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <!-- Campo oculto para pasar el ID de la semana -->
                    <input type="hidden" name="week_id" value="{{ $week->id }}">

                    <button type="submit" class="btn btn-primary">Crear Lección</button>
                </form>
            </div>
        </div>
    </div>
</div>