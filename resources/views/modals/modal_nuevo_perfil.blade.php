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
                <!-- Formulario para agregar un perfil -->
                <form method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <label for="nombre_perfil">Nombre del Perfil</label>
                        <input type="text" class="form-control" id="nombre_perfil" name="nombre_perfil" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>