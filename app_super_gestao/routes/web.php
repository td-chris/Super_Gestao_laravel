<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contatos', [\App\Http\Controllers\ContatosController::class,'contatos'])->name('site.contatos');
Route::post('/contatos', [\App\Http\Controllers\ContatosController::class,'contatos'])->name('site.contatos');
Route::get('/login', function() { return "login"; } )->name('site.login');

// agrupamento de rotas
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return "clientes"; } )->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function() { return "produtos"; } )->name('app.produtos');
});


//redirecionamento de rotas
// Route::get('/rota1', function() {
//     echo "Rota 1"; 
// })->name('site.rota1');

//  Route::get('/rota2', function() {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Route::redirect('/rota2', 'rota1');

// rota fallback

Route::fallback(function() {
    echo 'A rota acessada nao existe! <a href="'.route('site.index').'">Clique aqui</a> para voltar para a pagina inicial!';
});

// Rotas passando parametros

// Route::get('/contatos/{nome}/{categoria}/{assunto}/{mensagem?}', // a interrogação indica um parametro opcional
//     function(string $nome, string $categoria, string $assunto, string $mensagem = "mensagem não indicada"){
//         echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
// });

// Route::get('/contatos/{nome}/{categoria_id}', 
//     function(
//         string $nome = "Desconhecido",
//         int $categoria_id = 1,
//         ) {
//            echo "Estamos aqui: $nome - $categoria_id";
//         }
//     )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); 
        // categoria_id só pode ser um numero de 0 a 9 e precisa ter pelo menos 1 numero (+)
        // nome so pode receber caracteres de A-Z ou a-z e precisa ter pelo menos 1 caracter (+)

// passando parametros para o controller
Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');



// verbos http:

// get
// post
// put
// patch
// delete
// options
