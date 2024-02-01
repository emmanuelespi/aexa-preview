<div class="modal fade" id="modalAgregarTerminal" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTerminalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarTerminalLabel">Agregar Terminal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar un perfil -->
                <form method="POST" action="#">
                    @csrf
                    <div class="row">
                        <div class="form-group col-5">
                            <label for="">Nombre de terminal:</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Clave de terminal:</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Abrevación:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-5">
                            <label for="">Número de terminal:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-7">
                            <label for="">Municipio de origen:</label>
                            <select class="form-control form-control-sm" name="" id="">
                                <option>Seleccione el origen...</option>
                                <option value="Tuxtla Gutiérrez">Tuxtla Gutiérrez</option>
                                <option value="Tapachula">Tapachula</option>
                                <option value="Huixtla">Huixtla</option>
                                <option value="Escuintla">Escuintla</option>
                                <option value="Mapastepec">Mapastepec</option>
                                <option value="Pijijiapan">Pijijiapan</option>
                                <option value="Tonalá">Tonalá</option>
                                <option value="Arriaga">Arriga</option>
                                <option value="Cintalapa">Cintalapa</option>
                                <option value="San Cristobal de las Casas">San Cristóbal de las Casas</option>
                                <option value="Palenque">Palenque</option>
                            </select>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="form-group col-10">
                            <label for="">Prefijo de facturas:</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="col-1"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>