<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/consol', function () {
    return view('consol');
});
Route::get('/test', 'TestController@index');
	
Route::get('/create' ,'TestController@create');
Route::post('/post' ,'TestController@store');
Route::get('/show/{id}/{name}/{sex}/' ,'TestController@show');

Route::get("/product", "ProductController@index");


Route::get("/todo", "TodoController@index");
Route::get("/todo/create", "TodoController@create");
Route::post("/todo", "TodoController@store");
Route::get("/todo/show/{id}", "TodoController@show");
Route::get("/todo/edit/{id}", "TodoController@edit");
Route::post("/todo/update/{id}", "TodoController@update");
Route::get("/todo/delete/{id}", "TodoController@destroy");
