<div class="modal fade" id="editExamModal" tabindex="-1" role="dialog" aria-labelledby="editExamModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editExamModalLabel">Editar Examen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form id="editForm" action="{{ route('exams.update', $exam->id) }}" method="post">
            @csrf
            @method('PUT')

            <!-- Aquí se agregarán los campos del formulario -->
            <!-- Asegúrate de que estás pasando el examen correcto a esta vista -->

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" id="saveExamButton">Guardar</button>
            </div>
          </form>
          <br>
          <button id="agregarPregunta" class="btn btn-primary">Agregar Pregunta</button>
          <button id="quitarPregunta" class="btn btn-danger">Quitar Pregunta</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Incluye jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    var contadorPreguntas = 1;
    $('#agregarPregunta').click(function() {
        // Aquí puedes agregar la lógica para agregar preguntas al formulario
    });
    $('#quitarPregunta').click(function() {
        // Aquí puedes agregar la lógica para quitar preguntas del formulario
    });
    $(document).on('click', '.agregarCasilla', function(e) {
        e.preventDefault();
        var grupo = $(this).parent();
        var idGrupo = grupo.attr('id').replace('grupo', '');
        var contadorCasillas = grupo.find('.form-check').length + 1;
        grupo.find('#casillas' + idGrupo).append('<div class="form-check" id="casilla' + contadorCasillas + '_' + idGrupo + '"><input class="form-check-input" type="checkbox" id="casilla' + contadorCasillas + '_' + idGrupo + '" name="preguntas[' + idGrupo + '][respuestas][' + contadorCasillas + '][GoodOpci]"><input type="text" class="form-control form-control-sm" id="respuesta' + contadorCasillas + '_' + idGrupo + '" name="preguntas[' + idGrupo + '][respuestas][' + contadorCasillas + '][option]"></div>');
    });
    $(document).on('click', '.quitarCasilla', function(e) {
        e.preventDefault();
        var grupo = $(this).parent();
        var idGrupo = grupo.attr('id').replace('grupo', '');
        var contadorCasillas = grupo.find('.form-check').length;
        if (contadorCasillas > 0) {
            grupo.find('#casilla' + contadorCasillas + '_' + idGrupo).remove();
        }
    });
});
</script>

  