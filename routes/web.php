<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

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

    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.inicio');
    Route::get('/productos/crear', [ProductoController::class, 'create'])->name('productos.crear'); 
    Route::post('/productos/guardar', [ProductoController::class, 'store'])->name('productos.store');

    Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.inicio');
    Route::get('/empleados/crear', [EmpleadoController::class, 'create'])->name('empleados.crear'); 
    Route::post('/empleados/guardar', [EmpleadoController::class, 'store'])->name('empleados.store');


    Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.inicio');
    Route::get('/proveedores/crear', [ProveedorController::class, 'create'])->name('proveedores.crear'); 
    Route::post('/proveedores/guardar', [ProveedorController::class, 'store'])->name('proveedores.store');


});
