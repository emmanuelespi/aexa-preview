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

require __DIR__.'/auth.php';
