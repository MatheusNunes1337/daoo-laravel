<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GrupoController;
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

Route::get('/hello', function() {
    echo "<h2>Hello! I'm using Laravel!!</h2>";
});

Route::get('/ola', [HomeController::class, 'index']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::get('/usuario', [UsuarioController::class, 'create']);
Route::post('/usuario', [UsuarioController::class, 'store']);
Route::post('/usuario/{id}/update', [UsuarioController::class, 'update']);
Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit']);
Route::get('/usuario/{id}/delete', [UsuarioController::class, 'delete']);

Route::get('/grupos', [GrupoController::class, 'index']);
Route::get('/grupos/{id}', [GrupoController::class, 'show']);
Route::get('/grupo', [GrupoController::class, 'create']);
Route::post('/grupo', [GrupoController::class, 'store']);
Route::post('/grupo/{id}/update', [GrupoController::class, 'update']);
Route::get('/grupo/{id}/edit', [UsuarioController::class, 'edit']);
Route::get('/grupo/{id}/delete', [UsuarioController::class, 'delete']);
