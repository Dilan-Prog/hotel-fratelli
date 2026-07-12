<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/contacto', 'frontend.contacto')->name('contacto');
Route::view('/reservar', 'frontend.reservar')->name('reservar');
Route::view('/hoteles-cerca-feria-san-marcos', 'frontend.hoteles-cerca-feria-san-marcos')->name('hoteles.feria');
Route::view('/hoteles-economicos-aguascalientes', 'frontend.hoteles-economicos-aguascalientes')->name('hoteles.economicos');
Route::view('/hoteles-centro', 'frontend.hoteles-centro')->name('hoteles.centro');

Route::view('/habitaciones', 'habitaciones.index')->name('habitaciones.index');
Route::view('/habitaciones/sencilla', 'habitaciones.sencilla')->name('habitaciones.sencilla');
Route::view('/habitaciones/doble', 'habitaciones.doble')->name('habitaciones.doble');
Route::view('/habitaciones/doble-matrimonial', 'habitaciones.doble-matrimonial')->name('habitaciones.doble-matrimonial');
Route::view('/habitaciones/suite-jr', 'habitaciones.suite-jr')->name('habitaciones.suite-jr');
Route::view('/habitaciones/master-suite', 'habitaciones.master-suite')->name('habitaciones.master-suite');
Route::view('/habitaciones/triple', 'habitaciones.triple')->name('habitaciones.triple');
Route::view('/habitaciones/cuadruple', 'habitaciones.cuadruple')->name('habitaciones.cuadruple');
