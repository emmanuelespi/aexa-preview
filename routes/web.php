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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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
});


Route::get('/moni_depositos', function(){
    return view('web.moni_depositos');
})->name('depositos');

Route::get('/moni_terminales', function(){
    return view('web.moni_terminales');
})->name('m_terminales');

Route::get('/moni_trafico', function(){
    return view('web.moni_trafico');
})->name('m_trafico');

Route::get('/moni_fideicomiso', function(){
    return view('web.moni_fideicomiso');
})->name('m_terminales');

Route::get('/moni_estadisticas', function(){
    return view('web.moni_estadisticas');
})->name('m_estadisticas');

Route::get('/u_gen_corridas', function(){
    return view('web.uti_gen_corridas');
})->name('u_gen_corridas');

Route::get('/u_gen_dias', function(){
    return view('web.uti_gen_d_depositos');
})->name('u_gen_dias_depositos');

Route::get('/u_respaldo', function(){
    return view('web.uti_resp_seguridad');
})->name('u_respaldos');

Route::get('/u_optimizar', function(){
    return view('web.uti_optimizar');
})->name('u_optimizar');

Route::get('/u_opt_fide', function(){
    return view('web.uti_optimizar_fide');
})->name('u_optimizar_fide');

Route::get('/rep_caratulas', function(){
    return view('web.rep_caratulas');
})->name('r_caratula');

Route::get('/rep_corte_taq', function(){
    return view('web.rep_corte_taquillas');
})->name('r_corte_taq');

Route::get('/rep_rel_cancel', function(){
    return view('web.rep_rel_cancelados');
})->name('r_rel_cancelados');

Route::get('/rep_vend_cancel', function(){
    return view('web.rep_vendidos_cancel');
})->name('r_rel_vendidos');

Route::get('/rep_rel_tps', function(){
    return view('web.rep_rel_tps');
})->name('r_rel_tps');

Route::get('/rep_rel_fideicomisos', function(){
    return view('web.rep_rel_fideicomisos');
})->name('r_rel_fide');

Route::get('/rep_fideicomisos_cancel', function(){
    return view('web.rep_fidei_cancel');
})->name('r_fide_cancel');


require __DIR__.'/auth.php';
