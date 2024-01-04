<div class="modal fade" id="modalAgregarRol" tabindex="-1" role="dialog" aria-labelledby="modalAgregarPerfilLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarPerfilLabel">Agregar Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formNuevoRol" method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre_perfil">Nombre del rol</label>
                        <input type="text" class="form-control" id="nombre_rol" name="name" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="nuevoRol()">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>