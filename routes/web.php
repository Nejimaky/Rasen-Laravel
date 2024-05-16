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
// El metodo view recibe como primer parametro la URL a la que va a responder y como segundo parametro el nombre de la vista que se va a mostrar
Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/blog', 'blog');
Route::view('/about', 'about');
