<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello', 'HelloController@hello_default');
$router->post('/hello', 'HelloController@salvarNomeSessao');
$router->get('/hello/{name}', 'HelloController@hello');

$router->post('/pessoas', 'PessoaController@cadastrar');
$router->get('/pessoas', 'PessoaController@listar');
$router->get('/pessoas/cadastro', 'PessoaController@cadastro');

$router->get('/orm', function() {
    return \App\Filme::all();
});

$router->group(['prefix' => 'api/v1'], function() use ($router)
{
    $router->get('filme', 'FilmeApiController@listar');
    $router->get('filme/{id}', 'FilmeApiController@retornarFilme');

    $router->post('filme', 'FilmeApiController@criarFilme');
    $router->put('filme/{id}', 'FilmeApiController@atualizarFilme');

    $router->delete('filme/{id}', 'FilmeApiController@apagarFilme');
} );