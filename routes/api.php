<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

/**
 * Listagem de Usuarios
 * 
 * 
 * Retorna todos os usuarios cadastrados
 * 
 * 
 * @responseFile response/ListarUsuarios.json
 */

Route::middleware('auth:sanctum')->get('/user', function () {
    return User::all();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('fornecedor', FornecedorController::class);

});