<?php

use App\Core\Routing\Route;
use App\Middleware\BlockFirefox;
use App\Middleware\BlockIE;
use App\Middleware\BlockChrome;

Route::get('/panel', 'PanelController@index', [Auth::class]);

Route::get('/', 'HomeController@index');

Route::get('/post/{slug}', 'PostController@single');
Route::get('/post/{slug}/comment/{comment_id}', 'PostController@comment');

Route::get('/todo/list', 'TodoController@list', [BlockFirefox::class]);
Route::get('/todo/add', 'TodoController@add');
Route::get('/todo/remove', 'TodoController@remove');


Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/posts', 'ArchiveController@posts');
Route::get('/archive/products', 'ArchiveController@products');

Route::add(['get', 'post'], '/a', function () {
    echo "welcome";
});

Route::post('/b', function () {
    echo "Save Ok";
});

Route::put('/c', ['controller', 'Method']);

Route::get('/d', ['controller@Method']);
