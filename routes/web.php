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

Route::redirect('/', '/hoteles-en-aguascalientes', 301);
Route::get('/hoteles-en-aguascalientes', [HomeController::class, 'index'])->name('home');

// robots.txt dinámico: el dominio real es hotelfratelli.com.mx (sin www) — el subdominio
// www tiene el certificado SSL roto, así que le decimos a los crawlers que no lo indexen.
Route::get('/robots.txt', function () {
    $isWww = str_starts_with(request()->getHost(), 'www.');

    $body = $isWww
        ? "User-agent: *\nDisallow: /\n"
        : "User-agent: *\nDisallow:\n\nSitemap: https://hotelfratelli.com.mx/sitemap.xml\n";

    return response($body, 200)->header('Content-Type', 'text/plain');
});

Route::view('/contacto', 'frontend.contacto')->name('contacto');
Route::redirect('/reservar', 'https://wa.me/524492196201', 301);
Route::view('/hoteles-cerca-feria-san-marcos', 'frontend.seo-urls.hoteles-cerca-feria-san-marcos')->name('hoteles.feria');
Route::view('/hoteles-economicos-aguascalientes', 'frontend.seo-urls.hoteles-economicos-aguascalientes')->name('hoteles.economicos');
Route::view('/hoteles-centro', 'frontend.seo-urls.hoteles-centro')->name('hoteles.centro');

Route::view('/habitaciones', 'habitaciones.index')->name('habitaciones.index');
Route::view('/habitaciones/sencilla', 'habitaciones.sencilla')->name('habitaciones.sencilla');
Route::view('/habitaciones/doble', 'habitaciones.doble')->name('habitaciones.doble');
Route::view('/habitaciones/doble-matrimonial', 'habitaciones.doble-matrimonial')->name('habitaciones.doble-matrimonial');
Route::view('/habitaciones/suite-jr', 'habitaciones.suite-jr')->name('habitaciones.suite-jr');
Route::view('/habitaciones/master-suite', 'habitaciones.master-suite')->name('habitaciones.master-suite');
Route::view('/habitaciones/triple', 'habitaciones.triple')->name('habitaciones.triple');
Route::view('/habitaciones/cuadruple', 'habitaciones.cuadruple')->name('habitaciones.cuadruple');
