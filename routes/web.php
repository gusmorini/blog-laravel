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

//exemplo rota com paramtro opcional
// Route::get('welcome/{name?}', function($name='visitante'){
//     return "Seja bem vindo $name";
// })->where('name','[A-Za-z]+');

// Route::get('hello', function(){
//     return "Hello World";
// });

// Route::get('/', function () {
//     return view('welcome');
// });

//usando o artisan make:controller

Route::get('forms', function(){
	return view ('dashboard.templates.forms');
});

Route::get('list', function(){
	return view ('dashboard.templates.list');
});

Route::get('home',function(){
	return view ('dashboard.templates.home');
});

Route::get('dashboard', function(){
	return view ('dashboard.templates.index');
});

Route::get('categoria', function(){
	return view ('home.templates.categoria');
});

Route::get('empresa', function(){
	return view ('home.templates.empresa');
});

Route::get('contato', function(){
	return view ('home.templates.contato');
});

Route::get('site', function(){
	return view('home.templates.home');
});

Route::get('sobre','PagesController@sobre');

// Route::get('dashboard',function(){
// 	return view('dashboard');
// });

Route::get('amigos', 'PagesController@amigos');

Route::get('/', function(){
	return view('home.templates.home');
});

//Route::get('/', 'PagesController@index');