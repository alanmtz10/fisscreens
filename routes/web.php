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


// RUTAS PRINCIPALES
Route::get('/login',['as'=>'login','uses'=>'PagesController@login']);
Route::post('/auth',['as'=>'auth','uses'=>'PagesController@auth']);
Route::get('/',['as'=>'inicioPage','uses'=>'PagesController@index']);
Route::get('/registro',['as'=>'registro','uses'=>'PagesController@registro']);



//RUTAS ADMINISTRADOR
Route::get('/admin', ['as'=>'inicio','uses'=>'PanelAdminController@index']);
Route::get('/admin/grafico/linea', ['as'=>'grafLin','uses'=>'PanelAdminController@grafLinea']);
Route::get('/admin/grafico/otros', ['as'=>'grafOtr','uses'=>'PanelAdminController@grafOtr']);
Route::get('/admin/participantes', ['as'=>'participantes','uses'=>'PanelAdminController@participante']);
Route::get('/admin/formularios', ['as'=>'formularios','uses'=>'PanelAdminController@formularios']);
Route::get('/admin/configuraciones', ['as'=>'configuraciones','uses'=>'PanelAdminController@configuraciones']);
Route::get('/admin/solicitudes', ['as'=>'solicitudes','uses'=>'PanelAdminController@solicitudes']);
Route::get('/admin/crear-evento', ['as'=>'creare','uses'=>'PanelAdminController@creare']);
Route::get('/admin/prox-eventos', ['as'=>'proxevents','uses'=>'PanelAdminController@proxevents']);


//RUTAS USUARIO
Route::get('/user',['as'=>'inicioUser','uses'=>'UsersController@index']);



