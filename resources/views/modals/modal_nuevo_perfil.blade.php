<div class="modal fade" id="modalAgregarPerfil" tabindex="-1" role="dialog" aria-labelledby="modalAgregarPerfilLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarPerfilLabel">Agregar Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="formAgregarPerfil">
                    @csrf
                    <div class="form-group col-12">
                        <label for="nombre_perfil">Nombre del Perfil</label>
                        <input type="text" class="form-control form-control-sm" id="nombre_perfil" name="nombre_perfil">
                        @error('nombre_perfil')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="addPerfil">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>