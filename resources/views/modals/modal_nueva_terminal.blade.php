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
                <form method="POST" action="{{ route('terminales.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-5">
                            <label for="">Nombre de terminal:</label>
                            <input type="text" name="nombre_terminal" id="nombre_terminal" class="form-control form-control-sm" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Clave de terminal:</label>
                            <input type="text" name="clave_terminal" id="clave_terminal" class="form-control form-control-sm" placeholder="">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Abrevación:</label>
                            <input type="text" class="form-control form-control-sm" name="abreviacion" id="abreviacion" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Latitud (Ubicación)</label>
                            <input type="text" class="form-control form-control-sm" name="latitud" id="latitud" placeholder="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Longitud (Ubicación)</label>
                            <input type="text" class="form-control form-control-sm" name="longitud" id="longitud" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="">Número terminal:</label>
                            <input type="text" class="form-control form-control-sm" name="num_terminal" id="num_terminal" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Prefijo de factura:</label>
                            <input type="text" class="form-control form-control-sm" name="pref_factura" id="pref_factura" placeholder="">
                        </div>                        
                        <div class="form-group col-4">
                            <label for="">Municipio origen:</label>
                            <select class="form-control form-control-sm" name="mun_origen" id="mun_origen">
                                <option>Seleccione municipio...</option>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>