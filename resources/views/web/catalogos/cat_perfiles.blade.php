@extends('adminlte::page')

@section('content')
@include('modals.modal_nuevo_perfil')
<section class="section">
    <div class="section-header">
        <div class="row">
            <h3 class="page__heading col-4">Perfiles</h3>
            <div class="col-4"></div>
            <div class="col-4">
                <p class="text-primary text-right">Empresa: </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-3"></div>
            <div class="col-3">
                <a class="btn btn-primary btn-sm btn-block rounded-3 " role="button" data-toggle="modal" data-target="#modalAgregarPerfil">Nuevo perfil <i class="fas fa-plus"></i></a>
            </div>
        </div>
        <br>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table id="perfiles" class="table table-responsive-sm table-striped table-bordered mt-2">
                            <thead>
                                <th>Nombre</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @if ($perfiles as $perfil)
                                    <tr>
                                        <td>{{ $perfil->nombre_perfil }}</td>
                                        <td>
                                            @if ($perfil->estatus = 1)
                                                <span class="badge badge-success">Activo</span>
                                            @elseif ($perfil->estatus = 0)
                                                <span class="badge badge-danger">Elimando</span>
                                            @elseif ($perfil->estatus = 2)
                                                <span class="badge badge-secondary">Desactivado</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa fa-eye"></i></a>
                                            <a name="" id="" class="btn btn-success" href="#" role="button"><i class="fas fa-pencil-alt"></i></a>
                                            <a name="" id="" class="btn btn-danger" href="#" role="button"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endif
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
            $("#perfiles").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
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
        });
    </script>
    <script src="{{ asset('js/form-nuevo-perfil.js') }}"></script>    
@endsection
