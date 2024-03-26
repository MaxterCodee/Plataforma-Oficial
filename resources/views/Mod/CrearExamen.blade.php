<div class="modal fade" id="createExamModal" tabindex="-1" role="dialog" aria-labelledby="createExamModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createExamModalLabel">Crear Examen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form id="formulario" action="{{ route('exams.store') }}" method="post">
            @csrf
            
                <!-- Aquí se agregarán los campos del formulario -->
            </form>
            <br>
            <button id="agregarPregunta" class="btn btn-primary">Agregar Pregunta</button>
            <button id="quitarPregunta" class="btn btn-danger">Quitar Pregunta</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="saveExamButton">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Incluye jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
  $('#saveExamButton').click(function(e) {
e.preventDefault();
$('#formulario').submit();
});
</script>
<script>
  $('#formulario').append('<div class="form-group"><label for="EXaname">Nombre del examen:</label><input type="text" class="form-control form-control-sm" id="EXaname" name="EXaname"></div><br>');
$(document).ready(function() {
    var contadorPreguntas = 1;
    $('#agregarPregunta').click(function() {
        $('#formulario').append('<div class="form-group" id="grupo' + contadorPreguntas + '"><label for="pregunta' + contadorPreguntas + '">Pregunta ' + contadorPreguntas + '</label><input type="text" class="form-control form-control-sm" id="pregunta' + contadorPreguntas + '" name="preguntas[' + contadorPreguntas + '][pregunta]"><div id="casillas' + contadorPreguntas + '"></div><br><button class="btn btn-primary agregarCasilla"><i class="fas fa-plus"></i></button><button class="btn btn-danger quitarCasilla"><i class="fas fa-trash"></i></button><br></div><br>');
        contadorPreguntas++;
    });
    $('#quitarPregunta').click(function() {
        if (contadorPreguntas > 1) {
            contadorPreguntas--;
            $('#grupo' + contadorPreguntas).next('br').remove(); // Elimina el salto de línea
            $('#grupo' + contadorPreguntas).remove(); // Elimina la pregunta
        }
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
    
    $('#saveExamButton').click(function(e) {
        e.preventDefault();
        var datosDelFormulario = $('#formulario').serialize(); // Serializas los datos del formulario

        // Crear un nuevo examen
        $.ajax({
            url: '/exams',
            type: 'POST',
            data: datosDelFormulario,
            success: function(response) {
                // Aquí puedes manejar la respuesta del servidor
                // Por ejemplo, podrías cerrar el modal y actualizar la lista de exámenes
            }
        });
    });
});
</script>
