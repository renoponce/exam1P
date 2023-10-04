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


Route::get('/', function () {
    return view('welcome');
});


Route: :get ()

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Route :: view ( '/', 'welcome'); // la / siempre será la primera que abrirá el archivo

Route ::view ('/vista1', 'vista1');// 1er parametro por esta ruta --> abre este archivo

Route::view('/vista2', 'vista2');

Route::view('/vista3', 'vista3');
