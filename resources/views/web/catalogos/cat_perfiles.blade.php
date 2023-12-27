@extends('adminlte::page')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row">
            <h3 class="page__heading col-4">Perfiles</h3>
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
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                    <tr>
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
