<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/roles', fn() => view('web.roles.index'))->name('roles.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::prefix('/ventas')->group(function(){
        Route::get('/taquillas', fn() => view('web.ventas.vent_taquillas'))->name('vent_taquillas');
        Route::get('/corridas', fn() => view('web.ventas.vent_corridas'))->name('vent_corridas');
        Route::get('/depositos', fn() => view('web.ventas.vent_depositos'))->name('vent_depositos');
        Route::get('/cancelaciones', fn() => view('web.ventas.vent_cancelaciones'))->name('vent_cancelaciones');
    });

    Route::prefix('/catalogos')->group(function(){
        Route::get('/empleados', fn() => view('web.catalogos.cat_empleados'))->name('cat_empleados');
        Route::get('/clientes', fn() => view('web.catalogos.cat_clientes'))->name('cat_clientes');
        Route::get('/empresas', fn() => view('web.catalogos.cat_empresas'))->name('cat_empresas');
        Route::get('/terminales', fn() => view('web.catalogos.cat_terminales'))->name('cat_terminales');
        Route::get('/precios', fn() => view('web.catalogos.cat_precios'))->name('cat_precios');
        Route::get('/corridas', fn() => view('web.catalogos.cat_corridas'))->name('cat_corridas');        
    });

    Route::prefix('/monitoreo')->group(function(){
        Route::get('/depositos', fn() => view('web.monitor.moni_depositos'))->name('moni_depositos');
        Route::get('/terminales', fn() => view('web.monitor.moni_terminales'))->name('moni_terminales');
        Route::get('/trafico', fn() => view('web.monitor.moni_trafico'))->name('moni_trafico');
        Route::get('/fideicomiso', fn() => view('web.monitor.moni_fideicomiso'))->name('moni_fideicomiso');
        Route::get('/estadisticas', fn() => view('web.monitor.moni_estadisticas'))->name('moni_estadisticas');
    });

    Route::prefix('/imss')->group(function(){
        Route::get('/registro', fn() => view('web.imss.im_registro'))->name('imss_registro');
        Route::get('/caratula_global', fn() => view('web.imss.im_caratula_glb'))->name('imss_caratula');
        Route::get('/corte_taquilla', fn() => view('web.imss.im_corte_taq'))->name('imss_corte_taqui');
        Route::get('/rel_cancelados', fn() => view('web.imss.im_cancelados'))->name('imss_cancelados');
        Route::get('/estatidistica', fn() => view('web.imss.im_estadisticas'))->name('imss_estadisticas');
    });

    Route::prefix('/utilerias')->group(function(){
        Route::get('/generar_corridas', fn() => view('web.utilerias.uti_gen_corridas'))->name('uti_gen_corridas');
        Route::get('/generar_dias_depositos', fn() => view('web.utilerias.uti_gen_d_depositos'))->name('uti_gen_dias_depositos');
        Route::get('/respaldo_seguridad', fn() => view('web.utilerias.uti_resp_seguridad'))->name('uti_respaldos');
        Route::get('/optimizar', fn() => view('web.utilerias.uti_optimizar'))->name('uti_optimizar');
        Route::get('/optimizar_fide', fn() => view('web.utilerias.uti_optimizar_fide'))->name('uti_optimizar_fide');
    });

    Route::prefix('/reportes')->group(function(){
        Route::get('/reporte_caratulas', fn() => view('web.reportes.rep_caratulas'))->name('repor_caratulas');
        Route::get('/reporte_corte_taquillas', fn() => view('web.reportes.rep_corte_taquillas'))->name('repor_corte_taquillas');
        Route::get('/reporte_cancelados', fn() => view('web.reportes.rep_rel_cancelados'))->name('repor_cancelados');
        Route::get('/reporte_vendidos_cancel', fn() => view('web.reportes.rep_vendidos_cancel'))->name('repor_vendidos_cancelados');
        Route::get('/reporte_rel_tps', fn() => view('web.reportes.rep_rel_tps'))->name('repor_relacion_tps');
        Route::get('/reporte_rel_fideicomisos', fn() => view('web.reportes.rep_rel_fideicomisos'))->name('repor_rel_fideicomisos');
        Route::get('/reporte_fide_cancelados', fn() => view('web.reportes.rep_fidei_cancel'))->name('repor_fideicomisos_cancel');
    });
});


require __DIR__.'/auth.php';
