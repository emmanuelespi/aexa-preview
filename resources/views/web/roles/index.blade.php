@extends('layouts.app')

@section('content')

@include('modals.modal_nuevo_rol')
<section class="section">
    <div class="section-header">
        <div class="row">
            <h3 class="page__heading col-4">Empresas</h3>
            <div class="col-4"></div>
            <div class="col-4">
                <p class="text-primary text-right">Empresa: </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-4"></div>
            <div class="col-2">
                <a class="btn btn-primary btn-sm btn-block rounded-3" role="button" data-toggle="modal" data-target="#modalAgregarRol">Nuevo rol <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <br>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table id="roles" class="table table-responsive-sm table-striped table-bordered mt-2">
                            <thead>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>Acciones </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(function() {
        $("#roles").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [5, 10, 25, 50],
            language: {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
                },
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            }
        });

        $('#modalAgregarRol form').submit(function(e){
            e.preventDefault();

            swal.fire({
                title: '¿Estás seguro?',
                text: '¿Deseas guardar este rol?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText : 'Si, guardar.',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if(result.isConfirmed){
                    $('#formNuevoRol').unbind('submit').submit();
                }
            });
        });
    });
</script>
@endsection