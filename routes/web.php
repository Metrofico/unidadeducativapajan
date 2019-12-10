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


Route::get('/', function () {
    return Request::ajax() ? View::make('inicio') : view('root.inicioroot');
})->name('inicio');

Route::get('/quienes-somos', function () {
    return Request::ajax() ? view('quienesomos') : view('root.quienessomosroot');
})->name('quienes-somos');

Route::get('/slider', function () {
    return Request::ajax() ? View::make('sliders.rootslider') : null;
})->name('slider');

Route::get('/reseña-historica', function () {
    return Request::ajax() ? View::make('reseñahistorica') : view('root.reseñahistoricaroot');
})->name('reseña-historica');

Route::get('/autoridades', function () {
    return Request::ajax() ? View::make('autoridades') : view('root.autoridadesroot');
})->name('autoridades');

Route::get('/contactanos', function () {
    return Request::ajax() ? View::make('contactanos') : view('root.contactanosroot');
})->name('contactanos');
Route::post('/send-email', "sendEmail@sendEmail");
Route::get('/actividades-eventos', function () {
    return Request::ajax() ? View::make('actividades-eventos') : view('root.actividades-eventosroot');
})->name('actividades-eventos');

Route::get('/ejemplo', function (){
    return Request::ajax() ? View::make('ejemplo') : view('root.ejemplo');
})->name('ejemplo');
