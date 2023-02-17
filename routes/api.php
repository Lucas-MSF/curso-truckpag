<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
