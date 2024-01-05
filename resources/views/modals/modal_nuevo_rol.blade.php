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
                </form>
                <br>
                <div class="row">
                    <div class="col-12">
                        <label for="">Permisos de este rol:</label>
                    </div>
                </div>
                <div id="rol" class="col-md-12">
                    <div class="form-group">
                        @foreach ($permission as $value)
                        <label for="">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}{{ $value->name }}</label>
                        <br>
                        @endforeach
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="nuevoRol()">Guardar</button>
            </div>
        </div>
    </div>
</div>