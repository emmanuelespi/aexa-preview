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
});

Route::get('/perfil', function(){
    return view('profile.edit');
})->name('editProfile');

Route::get('/vent_taquillas', function(){
    return view('web.vent_taquillas');
})->name('vent_taquillas');

Route::get('/vent_corridas', function(){
    return view('web.vent_corridas');
})->name('corridas');

Route::get('/vent_depositos', function(){
    return view('web.vent_depositos');
})->name('depositos');

Route::get('/vent_cancelaciones', function(){
    return view('web.vent_cancelaciones');
})->name('cancelaciones');

Route::get('/cat_empleados', function(){
    return view('web.cat_empleados');
})->name('empleados');

Route::get('/cat_clientes', function(){
    return view('web.cat_clientes');
})->name('clientes');

Route::get('/cat_empresas', function(){
    return view('web.cat_empresas');
})->name('empresas');

Route::get('/cat_terminales', function(){
    return view('web.cat_terminales');
})->name('terminales');

Route::get('/cat_precios', function(){
    return view('web.cat_precios');
})->name('precios');

Route::get('/cat_corridas', function(){
    return view('web.cat_corridas');
})->name('corridas');

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

require __DIR__.'/auth.php';
