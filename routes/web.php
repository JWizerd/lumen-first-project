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

use App\Http\Controllers\ArticleController;

$router->get('/', 'ArticleController@index');
$router->get('article/{id}','ArticleController@single');
$router->post('article','ArticleController@saveArticle');
$router->put('article/{id}','ArticleController@updateArticle');
$router->delete('article/{id}','ArticleController@deleteArticle');