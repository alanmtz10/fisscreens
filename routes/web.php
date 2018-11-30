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

Route::get('/', ['as'=>'inicio','uses'=>'PagesController@index']);
Route::get('/grafico/linea', ['as'=>'grafLin','uses'=>'PagesController@grafLinea']);
Route::get('/grafico/otros', ['as'=>'grafOtr','uses'=>'PagesController@grafOtr']);
Route::get('/participantes', ['as'=>'participantes','uses'=>'PagesController@participante']);
Route::get('/formularios', ['as'=>'formularios','uses'=>'PagesController@formularios']);
Route::get('/configuraciones', ['as'=>'configuraciones','uses'=>'PagesController@configuraciones']);

