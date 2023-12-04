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

Route::get('/taquillas', function(){
    return view('web.taquillas');
})->name('taquillas');

Route::get('/corridas', function(){
    return view('web.corridas');
})->name('corridas');

Route::get('/depositos', function(){
    return view('web.depositos');
})->name('depositos');

Route::get('/cancelaciones', function(){
    return view('web.cancelaciones');
})->name('cancelaciones');

Route::get('/empleados', function(){
    return view('web.empleados');
})->name('empleados');

Route::get('/clientes', function(){
    return view('web.clientes');
})->name('clientes');

Route::get('/empresas', function(){
    return view('web.empresas');
})->name('empresas');

Route::get('/terminales', function(){
    return view('web.terminales');
})->name('terminales');

Route::get('/precios', function(){
    return view('web.precios');
})->name('precios');

Route::get('/cat_corridas', function(){
    return view('web.cat_corridas');
})->name('corridas');

require __DIR__.'/auth.php';
