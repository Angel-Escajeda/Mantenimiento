<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('login'          ,'userController@IniciarSesion')   -> name('IniciarSesion');
Route::post('login.permisos' ,'userController@SesionPermisos')  -> name('SesionPermisos');

//=================================== USUARIOS======================================================
Route::get('catusuarios'     ,'userController@getcatalogo') -> name('getcatalogo');   
Route::get('usuarios'	     ,'userController@getAll')      -> name('getAllUsuarios');  //PROBADA
Route::post('usuarios'       ,'userController@add')         -> name('addUsuarios');    	//PROBADA
Route::put('usuarios/{id}'   ,'userController@update')  	-> name('updateUsuarios');  //PROBADA
Route::delete('usuarios/{id}','userController@delete')      -> name('deleteUsuarios');  //PROBADA
Route::post('estatus.user'   ,'userController@estatusUser') -> name('estatusUser');    	//PROBADA

/

























