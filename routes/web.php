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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::get('/', ['as' => 'home', 'uses' => 'Site\HomeController@home']);


/*START OPERADOR*/
Route::prefix('federacoes')->group(function () {
    Route::get('index', ['as' => 'site.federacoes.index', 'uses' => 'Site\FederacaoController@index']);
    Route::get('{id}/ver-mais', ['as' => 'site.federacoes.ver_mais', 'uses' => 'Site\FederacaoController@ver_mais']);
    // Route::get('sobre', ['as' => 'site.federacoes.sobre', 'uses' => 'Site\FederacaoController@sobre']);
  
});
/*END OPERADOR*/

/*START SOBRE*/
Route::prefix('blogs')->group(function () {
    Route::get('index', ['as' => 'site.blog.index', 'uses' => 'Site\BlogController@index']);
    Route::get('/quadro-legal', ['as' => 'site.blog.quadro_legal', 'uses' => 'Site\BlogController@quadro_legal']);
    Route::get('/reguladores-associados', ['as' => 'site.blog.regulador_associado', 'uses' => 'Site\BlogController@regulador_associado']);
    Route::get('/licenciamentos', ['as' => 'site.blog.licenciamentos', 'uses' => 'Site\BlogController@licenciamentos']);
});
/*END SOBRE*/
/*START BLOG*/
Route::prefix('blog')->group(function () {
    Route::get('index', ['as' => 'site.sobre.index', 'uses' => 'Site\SobreController@index']);
    Route::get('/quadro-legal', ['as' => 'site.sobre.quadro_legal', 'uses' => 'Site\SobreController@quadro_legal']);
    Route::get('/reguladores-associados', ['as' => 'site.sobre.regulador_associado', 'uses' => 'Site\SobreController@regulador_associado']);
    Route::get('/licenciamentos', ['as' => 'site.sobre.licenciamentos', 'uses' => 'Site\SobreController@licenciamentos']);
});
/*END BLOG*/


Route::get('/contactos', ['as' => 'site.contacto.index', 'uses' => 'Site\ContactoController@index']);
