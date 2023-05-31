<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/obat', function () {
    return view('Obat');
});
Route::get('/home', function () {
    return view('Homepage');
});
Route::get('/pakan', function () {
    return view('Pakan');
});
Route::get('/sejarah', function () {
    return view('Sejarah');
});
Route::get('/varietas', function () {
    return view('Varietas');
});


