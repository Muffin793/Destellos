<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::Class)->group(function(){
    Route::get('menu','show');
    Route::get('product_view','productos');
    Route::get('product2','producto2');
    Route::get('product3','producto3');
    Route::get('login','ingreso');
    Route::get('registro','registros');
    Route::get('carrito','carritos');
    Route::get('vistapremenu','menuemergente');
    Route::get('tablaxd','ShowCompus');
    Route::get('formularioborrable','formulario');
    Route::post('alumnos','crearAlumno');

});

Route::controller(AdminController::Class)->group(function(){
    Route::get('eliminar','delete');
    Route::get('consulta','consult');
    
});