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

$app->get('/', 'App\Http\Controllers\AutenticacaoController@index');

$app->group(['prefix' => '/autenticacao'], function($app)
{
	$app->post('login', 'App\Http\Controllers\AutenticacaoController@login');
	$app->get('logout', 'App\Http\Controllers\AutenticacaoController@logout');
});

$app->group(['prefix' => '/usuario'], function($app)
{
	$app->get('', 'App\Http\Controllers\UsuarioController@index');
	$app->get('cadastrar', 'App\Http\Controllers\UsuarioController@cadastrar');
	$app->post('', 'App\Http\Controllers\UsuarioController@salvar');
	$app->get('{idUsuario}', 'App\Http\Controllers\UsuarioController@visualizar');
	$app->get('{idUsuario}/editar', 'App\Http\Controllers\UsuarioController@editar');
	$app->put('{idUsuario}', 'App\Http\Controllers\UsuarioController@atualizar');
	$app->delete('{idUsuario}', 'App\Http\Controllers\UsuarioController@excluir');
});

$app->group(['prefix' => '/categoria'], function($app)
{
	$app->get('', 'App\Http\Controllers\CategoriaController@index');
});
