<div class="modal fade" id="modalAgregarEmpleado" tabindex="-1" role="dialog"
    aria-labelledby="modalAgregarEmpleadoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarPerfilLabel">Agregar Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar un perfil -->
                <form method="POST" action="#">
                    @csrf
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home"
                                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Datos
                                personales</button>
                            <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Detalles</button>
                            <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact"
                                type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Domicilio</button>
                            <button class="nav-link" id="nav-observaciones" data-toggle="tab" data-target="#nav-observaciones"
                                type="button" role="tab" aria-controls="nav-observaciones"
                                aria-selected="false">Observaciones</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <br>
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="form-group col-8">
                                    <label>Nombre completo:</label>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Nombre completo">
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Sexo:</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="">Empresa:</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Religión:</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Estado civil:</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="">Puesto:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Puesto">
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Experiencia laboral:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Experiencia">
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Ocupación:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Referencia 1:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id=""  placeholder="Referencia 1">
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Referencia 2:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id=""  placeholder="Referencia 2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="">RFC (Con homoclave):</label>
                                    <input type="text" class="form-control form-control-sm" name="" id=""  placeholder="Ingrese RFC">
                                </div>
                                <div class="form-group col-4">
                                    <label for="">CURP:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id=""  placeholder="Ingrese CURP">
                                </div>
                                <div class="form-group col-4">
                                    <label for="">NSS (IMSS):</label>
                                    <input type="text" class="form-control form-control-sm" name="" id=""  placeholder="Ingrese NSS">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="">Tipo de empleado:</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group col-8">
                                    <label for="">Correo electrónico:</label>
                                    <input type="email" class="form-control form-control-sm" name="" id="" placeholder="Ingrese correo electrónico">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Teléfono fijo:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Teléfono fijo">
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Teléfono celular:</label>
                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Teléfono celular">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="">Nacionalidad</label>
                                    <input type="text" class="form-control" name="" id="" placeholder="Ingrese nacionalidad">
                                </div>
                                <div class="form-group col-3">
                                    <label for="">Estado:</label>
                                    <select class="form-control" name="" id="">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="">Municipio:</label>
                                    <select class="form-control" name="" id="">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="">Colonia:</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Ingrese colonia">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="">Num. exterior</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Num. interior</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="form-group col-4">
                                    <label for="">Código postal</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-observaciones" role="tabpanel" aria-labelledby="nav-observaciones">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Observaciones:</label>
                                    <textarea class="form-control" name="" id="" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>