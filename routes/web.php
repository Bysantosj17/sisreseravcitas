<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta para el Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])
    ->name('admin.index')->middleware('auth');

//rutas para el admin - usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])
    ->name('admin.usuarios.index')->middleware('auth');

//ruta para el crear-usuario
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])
    ->name('admin.usuarios.create')->middleware('auth');

//ruta para almacenar usuario
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])
    ->name('admin.usuarios.store')->middleware('auth');

//ruta para mostrar usuario
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])
    ->name('admin.usuarios.show')->middleware('auth');

//ruta para editar usuario
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])
    ->name('admin.usuarios.edit')->middleware('auth');

//ruta para usuario
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])
    ->name('admin.usuarios.update')->middleware('auth');

//Eliminar usuario
Route::get('/admin/usuarios/{id}/coneliminar', [App\Http\Controllers\UsuarioController::class, 'coneliminar'])
    ->name('admin.usuarios.coneliminar')->middleware('auth');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])
    ->name('admin.usuarios.destroy')->middleware('auth');


//rutas para el admin - secretarias
Route::get('/admin/secretarias', [App\Http\Controllers\SecretariaController::class, 'index'])
    ->name('admin.secretarias.index')->middleware('auth');

//ruta para el crear-secretaria
Route::get('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'create'])
    ->name('admin.secretarias.create')->middleware('auth');

//ruta para almacenar secretaria
Route::post('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'store'])
    ->name('admin.secretarias.store')->middleware('auth');

//ruta para mostrar secretaria
Route::get('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'show'])
    ->name('admin.secretarias.show')->middleware('auth');

//ruta para editar secretaria
Route::get('/admin/secretarias/{id}/edit', [App\Http\Controllers\SecretariaController::class, 'edit'])
    ->name('admin.secretarias.edit')->middleware('auth');

//ruta para secretaria
Route::put('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'update'])
    ->name('admin.secretarias.update')->middleware('auth');

//Eliminar secretaria
Route::get('admin/secretarias/{id}/confir-delete', [App\Http\Controllers\SecretariaController::class, 'confirmDelte'])
->name('admin.secretarias.ConfiDelte')->middleware('auth');