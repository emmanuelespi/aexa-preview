<div class="modal fade" id="modalNuevaTaquilla" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">sm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="">Nombre de taquilla: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-8">
                            <label for="">Número de taquilla: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Abreviación</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Terminal:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>