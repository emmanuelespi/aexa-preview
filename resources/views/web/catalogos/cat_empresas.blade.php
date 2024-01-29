@extends('adminlte::page')

@section('content')

@include('modals.modal_nueva_empresa')
<section class="section">
    <div class="section-header">
        <div class="row">
            <h3 class="page__heading col-4">Empresas</h3>
            <div class="col-4"></div>
            <div class="col-4">
                <p class="text-primary text-right">Terminal: </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-4"></div>
            <div class="col-2">
                <a class="btn btn-primary btn-sm btn-block rounded-3" role="button" data-toggle="modal" data-target="#modalNuevaEmpresa">Nueva empresa <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <br>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table id="empresas" class="table table-responsive-sm table-striped table-bordered mt-2">
                            <thead>
                                <th>Nombre</th>
                                <th>Clave</th>
                                <th>Razón social</th>
                                <th>RFC</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($empresas as $empresa)
                                    <tr>
                                        <td>{{ $empresa->nombre }}</td>
                                        <td>{{ $empresa->clave }}</td>
                                        <td>{{ $empresa->razon_social }}</td>
                                        <td>{{ $empresa->rfc }}</td>
                                        <td>{{ $empresa->estatus }}</td>
                                        <td>
                                            <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa fa-eye"></i></a>
                                            <a name="" id="" class="btn btn-success" href="#" role="button"><i class="fas fa-pencil-alt"></i></a>
                                            <a name="" id="" class="btn btn-danger" href="#" role="button"><i class="fa fa-trash"></i></a>
                                        </td>
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
        $("#empresas").DataTable({
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
@endsection
