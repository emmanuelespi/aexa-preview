<div class="modal fade" id="modalAgregarTerminal" tabindex="-1" role="dialog" aria-labelledby="modalAgregarTerminalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
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
                        <div class="form-group col-6">
                            <label for="">Clave:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="Introduzca clave de terminal">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Número: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="Introduzca número de terminal">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="">Abreviación: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="P. ej. TGZ, TAP.">
                        </div>
                        <div class="form-group col-9">
                            <label for="">Nombre de taquilla:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="Introduzca nombre de taquilla">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="">Último folio:</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Introduzca número de folio" readonly>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>