@extends('adminlte::page')

@section('content')

@include('modals.modal_nueva_taquilla')
<section class="section">
    <div class="section-header">
        <div class="row">
            <h3 class="page__heading col-4">Taquillas</h3>
            <div class="col-4"></div>
            <div class="col-4">
                <p class="text-primary text-right">Terminal: </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-4"></div>
            <div class="col-2">
                <a class="btn btn-primary btn-sm btn-block rounded-3" role="button" data-toggle="modal" data-target="#modalNuevaTaquilla">Nuevo empleado <i class="fa fa-plus"></i></a>
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
                                <th>Número de taquilla</th>
                                <th>Abreviación</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
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
        console.log('Sirve el JS')
    </script>
@endsection
