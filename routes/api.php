<?php

use App\Http\Controllers\Api\FornecedorController;
use App\Http\Controllers\Api\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produtos',[ProdutoController::class,'index']);
Route::get('/produtos/{id}',[ProdutoController::class,'show']);
Route::post('/produtos',[ProdutoController::class,'store']);

Route::put('/produtos/{id}',[ProdutoController::class,'update']);
Route::delete('/produtos/{id}',[ProdutoController::class,'delete']);

Route::apiResource('fornecedores',FornecedorController::class)
            ->parameters(["fornecedores"=>"fornecedor"]);

Route::get('fornecedores/{fornecedor}/produtos',[FornecedorController::class,'listProdutos'])
->name('fornecedores.produtos');
