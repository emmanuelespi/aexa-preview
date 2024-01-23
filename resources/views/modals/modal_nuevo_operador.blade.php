<div class="modal fade" id="agregarNuevoOperador" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo operador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="row">
                        <div class="form-group col-7">
                            <label for="">Nombre completo:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-5">
                            <label for="">Fecha de nacimiento:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="">Dirección:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="">Estado:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Municipio:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Colonia:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="">Código postal:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Estado civil:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-4">
                            <label for="">Sexo:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="">Teléfono celular:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-8">
                            <label for="">Correo electrónico:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Tipo de licencia:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Número de licencia:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-5">
                            <label for="">RFC:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group col-7">
                            <label for="">Fecha de ingreso:</label>
                            <input type="text" class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Empresa:</label>
                            <select class="form-control form-control-sm" name="" id="">
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Autobus:</label>
                            <select class="form-control form-control-sm" name="" id="">
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="">Observaciones</label>
                            <textarea class="form-control form-control-sm" name="" id="" rows="3"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>