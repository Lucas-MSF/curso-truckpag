<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ContaPagarController,
    FornecedorController,
    ContaBancariaController
};

/**
 * Listagem de Usuarios
 * 
 * 
 * Retorna todos os usuarios cadastrados
 * 
 * @group Usuarios
 * @responseFile response/ListarUsuarios.json
 */

Route::middleware('auth:sanctum')->get('/user', function () {
    return User::all();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('fornecedor', FornecedorController::class);
    Route::apiResource('conta-banco', ContaBancariaController::class);
    Route::apiResource('conta-pagar', ContaPagarController::class);

});