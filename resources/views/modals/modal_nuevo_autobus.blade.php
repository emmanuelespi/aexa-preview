<div class="modal fade" id="modalNuevoAutobus" tabindex="-1" role="dialog" aria-labelledby="modalNuevoAutobus" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo autobus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="nuevoAutobus" method="POST" action="#">
                    @csrf
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="">Tipo: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Modelo: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Catálogo: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Número de serie: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Número de motor: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Marca: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Placa: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="">Capacidad: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-5">
                            <label for="">Número ecónomico: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Servicio: </label>
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