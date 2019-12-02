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


if (Request::ajax()) {
    Route::get('/', function () {
        return View::make('inicio');
    })->name('inicio');
    Route::get('/quienes-somos', function () {
        return View::make('quienesomos');
    })->name('quienes-somos');
} else {
    Route::get('/quienes-somos', function () {
        return View::make('quienessomosroot');
    })->name('quienes-somos');
    Route::get('/', function () {
        return view('inicioroot');
    })->name('inicio');
}
