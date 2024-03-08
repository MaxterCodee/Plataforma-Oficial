<!-- Modal -->
<div class="modal fade" id="showExamModal" tabindex="-1" role="dialog" aria-labelledby="showExamModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="showExamModalLabel">Preguntas del Examen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <!-- Aquí se mostrarán las preguntas del examen -->
            @foreach ($questions as $question)
              <div>
                <h5>Pregunta:</h5>
                <p>{{ $question->ask }}</p>
              </div>
            @endforeach
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  