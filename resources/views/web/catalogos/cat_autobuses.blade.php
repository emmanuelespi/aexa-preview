@extends('adminlte::page')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="row">
                <h3 class="page__heading col-4">Autobuses</h3>
                <div class="col-4"></div>
                <div class="col-4">
                    <p class="text-primary text-right">Empresa: </p>
            </div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="empresas" class="table table-responsive-sm table-striped table-bordered mt-2">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Clave</th>
                                    <th>Nombre</th>
                                    <th>Razón social</th>
                                    <th>RFC</th>
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