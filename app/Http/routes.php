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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('prueba/{nombre}/{apellido}', function($nombre,$apellido) {
//    return 'El nombre es: '.$nombre.' y el apellido es: '.$apellido;
//})->where(array('nombre'=>'[a-zA-Z]+','apellido'=>'[a-zA-Z]+'));

//Route::get('prueba', [
//    'as' => 'prueba', ##ALIAS
//    'uses' => 'PruebaController@index'  ##LLAMADO A CONTROLODARES
//]);
//
//Route::group(['as' => 'admin::'], function() {
//    Route::get('dashboard', function () {
//        return view('welcome');
//    });
//});

//Route::get('prueba', [
//   'as' => 'prueba' ,
//    'uses' => 'HidroControler@index'
//]);
//
//Route::get('prueba2','web\Hidro2Controler@index');
//
//Route::resource('rest', 'RestControler');
//
//
//Route::auth();
//
//Route::get('/home', 'HomeController@index');
//
Route::get('/','IndexController@index');


