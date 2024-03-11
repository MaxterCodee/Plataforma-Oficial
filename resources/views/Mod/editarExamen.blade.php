<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Editar Examen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form action="{{ route('exams.update', $exam->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="modal-body">
                  <div class="form-group">
                      <label for="EXaname">Título del Examen</label>
                      <input type="text" class="form-control" id="EXaname" name="EXaname" value="{{ old('EXaname', $exam->title) }}" required>
                  </div>
                  <div class="form-group">
                      <label for="course_id">ID del Curso</label>
                      <input type="text" class="form-control" id="course_id" name="course_id" value="{{ old('course_id', $exam->course_id) }}" required>
                  </div>
                  <!-- Aquí puedes agregar más campos del formulario para editar el examen -->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Guardar cambios</button>
              </div>
          </form>
      </div>
  </div>
</div>
