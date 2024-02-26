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
                                <th style="width: 20%">Nombre</th>
                                <th style="width: 10%">Estatus</th>
                                <th style="width: 10%">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($perfiles as $perfil)
                                    <tr>
                                        <td>{{ $perfil->nombre_perfil }}</td>
                                        <td><span class="{{ $perfil->badgeClass }}">{{ $perfil->text }}</span></td>
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
    <script src="{{ asset('js/functions-perfil.js') }}"></script>    
@endsection
