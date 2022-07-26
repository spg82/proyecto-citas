<?php

use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacto',function(){
    return view('contacto');
});

Route::get('/admin',function(){
    return view('admin.index');
})->middleware(['auth','admin'])->name('admin');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','cliente'])->name('dashboard');
/**
 * Rutas del Perfil
 */

Route::get('perfil',[PerfilController::class,'index'])->name('perfil.index');
Route::get('perfil/create/{id}',[PerfilController::class,'create'])->name('perfil.crear');
Route::post('perfil/create/{id}',[PerfilController::class,'store'])->name('perfil.store');
Route::get('perfil/editar/{id}',[PerfilController::class,'edit'])->name('perfil.edit');
Route::post('perfil/editar/{id}',[PerfilController::class,'update'])->name('perfil.update');
Route::get('perfil/eliminar/{id}',[PerfilControllerr::class,'destroy'])->name('perfil.destroy');



require __DIR__.'/auth.php';
