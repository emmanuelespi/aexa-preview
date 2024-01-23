<div class="modal fade" id="modalNuevaEmpresa" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva empresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-2">
                            <label for="">Clave: </label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Razón social:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="">RFC:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-9">
                            <label for="">Dirección fiscal:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="">Número interior:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Número exterior:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Localidad:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Colonia:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="">Ciudad:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Estado:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-3">
                            <label for="">País:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                        <div class="form-group col-3">
                            <label for="">Telefono:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>