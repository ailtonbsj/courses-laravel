<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

use App\Models\User;
use App\Models\Conteudo;
use App\Models\Comentario;

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

Route::post('/cadastro', [UsuarioController::class, 'cadastro']);
Route::post('/login', [UsuarioController::class, 'login']);
Route::middleware('auth:api')->get('/usuario', [UsuarioController::class, 'get']);
Route::middleware('auth:api')->put('/perfil', [UsuarioController::class, 'update']);

Route::get('/testes', function () {
    $user = User::find(1);
    $user2 = User::find(2);

    // Add conteudos
    // $user->conteudos()->create([
    //     'titulo' => 'Conteúdo 3',
    //     'texto' => 'Texto 3',
    //     'image' => 'url3',
    //     'link' => 'Link3',
    //     'data' => '2018-05-10'
    // ]);
    // return $user->conteudos;

    // Add amigo
    // $user->amigos()->attach($user2->id);
    // return $user->amigos;

    // Conta amigos
    // $user->amigos()->count();

    // Remove amigo
    // $user->amigos()->detach($user2->id);
    // return $user->amigos;

    // Add amigo somente uma vez ou remove
    $user->amigos()->toggle($user2->id);
    return $user->amigos;

});
