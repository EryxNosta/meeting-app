<?php

use App\Http\Controllers\ProfileController;
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

// Rutas improvisadas para poder entrar a las paginas especificas desde el servidor montado en Laragon. 
// Solamente tienen que agarrar el nombre de la carpeta del archivo y pegarlo en el URL.
// Ejemplo: Quiero entrar a la vista de eventos, entonces sería http://127.0.0.1:8000/Evento 

Route::get('/Creacion_Eventos', function () {
    return view('.Creacion_Eventos/crearEventos');
});

Route::get('/Evento', function () {
    return view('.Evento/evento');
});

Route::get('/Lista_Evento', function () {
    return view('.Lista_Evento/listEvent');
});

Route::get('/', function () {
    return view('.Pagina_Index/index');
});

Route::get('/Sign_in', function () {
    return view('.Sign_in/sign');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
