@extends('adminlte::page')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="row">
                <h3 class="page__header col-4">Empleados</h3>
                <div class="col-4"></div>
                <div class="col-4">
                    <p class="text-primary text-right">Terminal:</p>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="empleados" class="table table-responsive-sm table-striped table-bordered mt-2">
                                <thead>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection