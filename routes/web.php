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

//All of these are the routes of the URL. 

// Route for Index
Route::get('Pagina_Index', function () {
    return view('./Pagina_Index/index');
});

// Route for the Index
Route::get('/', function () {
    return view('./Pagina_Index/index');
});

// Route for Event 
Route::get('/evento', function () {
    return view('./Evento/evento');
});

// Route for List Event 
Route::get('/Lista_Evento', function () {
    return view('./Lista_Evento/listEvent');
});

// Route for Signin 
Route::get('/signin', function () {
    return view('./Sign_in/signin');
});

// Route for Profile
Route::get('/Perfil', function () {
    return view('./Perfil/profile');
});

