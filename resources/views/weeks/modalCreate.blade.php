

            <!-- Modal para la creación de semanas -->
            <div class="modal fade" id="weekModal<?php echo $week['week_number']; ?>" tabindex="-1" aria-labelledby="weekModalLabel<?php echo $week['week_number']; ?>" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="weekModalLabel<?php echo $week['week_number']; ?>">Create Week</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Formulario para la creación de semanas -->
                            <form action="{{ route('weeks.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="number" value="<?php echo $week['week_number']; ?>">
                                <input type="hidden" name="course_id" value="{{ $course->id }}">

                                <div class="mb-3">
                                    <label for="week_name" class="form-label">Nombre / Tema principal de la semana</label>
                                    <textarea class="form-control" id="week_name" name="week_name" required></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descripcion</label>
                                    <textarea class="form-control" id="description" name="description" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="cargarImagen" class="form-label">Cargar Imagen:</label>
                                     <input type="file" name="image_upload" class="form-control" id="cargarImagen">
                                    </div>

                                <button type="submit" class="btn btn-primary">Create Week</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>