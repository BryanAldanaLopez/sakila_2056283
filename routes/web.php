<?php

use Illuminate\Support\Facades\Route;

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
//Ruta de controlador
Route::get("categorias", "CategoriaController@index"); 
Route::get('categorias/create' , "CategoriaController@create");
//guardar la nueva categoria en bd
Route::post('categorias/store', "CategoriaController@store");
//Ruta para mostrar categoria formulario para actualizar
Route::get("categorias/edit/{idcategoria}", "CategoriaController@edit" );
//Ruta para guardar cambios
Route::post("categorias/update", "CategoriaController@update"); 
    

