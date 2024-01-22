@extends('adminlte::page')

@section('content')

@include('modals.modal_nuevo_autobus')
    <section class="section">
        <div class="section-header">
            <div class="row">
                <h3 class="page__heading col-4">Autobuses</h3>
                <div class="col-4"></div>
                <div class="col-4">
                    <p class="text-primary text-right">Empresa: </p>
            </div class="row">
                <div class="col-6"></div>
                <div class="col-4"></div>
                <div class="col-2">
                    <a class="btn btn-primary btn-sm btn-block rounded-3" role="button" data-toggle="modal" data-target="#modalNuevoAutobus">Nuevo autobus <i class="fa fa-plus"></i></a>
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
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Catálogo</th>
                                    <th>Número de serie:</th>
                                    <th>Placa</th>
                                    <th>Modelo</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection