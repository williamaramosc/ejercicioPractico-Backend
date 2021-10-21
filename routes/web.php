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


// Rutas de vehiculos
$router->get('vehiculos', 'App\Http\Controllers\VehiculoController@index'); // Obtener lista vehiculos
$router->post('vehiculos', 'App\Http\Controllers\VehiculoController@create'); // Crear vehiculo
$router->post('eliminar-vehiculo', 'App\Http\Controllers\VehiculoController@delete'); // Eliminar vehiculo

// Rutas de Conductor
$router->get('conductor', 'App\Http\Controllers\ConductorController@index'); // Obtener la lista de conductores
$router->post('agregar', 'App\Http\Controllers\ConductorController@create'); // Crear un conductor
$router->post('actualizar-conductor/{id}', 'App\Http\Controllers\ConductorController@update'); // Actualizar datos de un conductor
$router->post('eliminar-conductor/{id}', 'App\Http\Controllers\ConductorController@delete'); // Eliminar un conductor

// Rutas de Supervisor
$router->get('supervisor', 'App\Http\Controllers\SupervisorController@index'); // Obtener lista supervisores
$router->post('supervisor', 'App\Http\Controllers\SupervisorController@create'); // Obtener lista supervisores

// Ruta de auditoria
$router->get('auditoria', 'App\Http\Controllers\ConductorController@auditoria'); // Obtener auditoria
