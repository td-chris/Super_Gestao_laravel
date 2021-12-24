<?php

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

// Rota padrão com funcao de callback

// Route::get($uri, $callback)

// Route::get('/', function () {
//     return 'Olá, seja bem vindo ao curso';
// });

// Route::get('/sobre-nos', function () {
//     return 'Sobre-nós';
// });

// Route::get('/contato', function () {
//     return 'Contato';
// });


// Rota com controller e action(funcao dentro de um controller)

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos']);

Route::get('/contatos', [\App\Http\Controllers\ContatosController::class,'contatos']);




// verbos http:

// get
// post
// put
// patch
// delete
// options
