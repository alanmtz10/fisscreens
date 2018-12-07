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

Route::get('/',['as'=>'inicioPage','uses'=>'InitController@index']);
Route::get('/registro',['as'=>'registro','uses'=>'InitController@registro']);


Route::get('/admin', ['as'=>'inicio','uses'=>'PagesController@index']);
Route::get('/admin/grafico/linea', ['as'=>'grafLin','uses'=>'PagesController@grafLinea']);
Route::get('/admin/grafico/otros', ['as'=>'grafOtr','uses'=>'PagesController@grafOtr']);
Route::get('/admin/participantes', ['as'=>'participantes','uses'=>'PagesController@participante']);
Route::get('/admin/formularios', ['as'=>'formularios','uses'=>'PagesController@formularios']);
Route::get('/admin/configuraciones', ['as'=>'configuraciones','uses'=>'PagesController@configuraciones']);
Route::get('/admin/eventos', ['as'=>'conferencias','uses'=>'PagesController@conferencias']);
Route::get('/admin/solicitudes', ['as'=>'solicitudes','uses'=>'PagesController@solicitudes']);
Route::get('/admin/crear-evento', ['as'=>'creare','uses'=>'PagesController@creare']);
Route::get('/admin/prox-eventos', ['as'=>'proxevents','uses'=>'PagesController@proxevents']);


Route::get('/user',['as'=>'inicioUser','uses'=>'UsersController@index']);


Route::get('/login',['as'=>'login','uses'=>'PagesController@login']);
Route::post('/auth',['as'=>'auth','uses'=>'PagesController@auth']);


