<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="editModalLabel">Editar Examen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="EXaname">Título del Examen</label>
                        <input type="text" class="form-control" id="EXaname" name="EXaname" required>
                    </div>
                    <div class="form-group">
                        <label for="questions">Preguntas del Examen</label>
                        <textarea class="form-control" id="questions" name="questions" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="answers">Respuestas del Examen</label>
                        <textarea class="form-control" id="answers" name="answers" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
                  