<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    $form = "<form action='prueba' method='post'>".
        "<input type='hidden' name='_token' value='".csrf_token()."'/>".
        "<input type='hidden' name='_method' value='delete'/>".
        "<input type='submit'/>".
        "</form>";
    return $form;
});

Route::post('prueba', function () {
    return "POST!!!";
});

Route::put('prueba', function (){
    return "PUT!!!";
});

Route::delete('prueba', function (){
    return "DELETE!!!";
});

// Ruta que responde por controlador
Route::get('controlador/{parametro?}', 'PruebaController@nombreFuncion')->middleware('auth');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    // Rutas para CRUD de Post
    Route::resource('post', 'PostController');
    // Rutas para CRUD de Tag
    Route::resource('tag', 'TagController');
});

// Ruta para acceder a los archivos de imagen (Storage)
Route::get('post/{nombreImagen}', 'PostController@getImagen')->name('post.imagen');

// Ruta para PDF
Route::get('post/{post}/reporte', 'PdfController@reporte')->name('post.reporte')->middleware('admin');

Route::auth();

Route::get('/home', 'HomeController@index');
