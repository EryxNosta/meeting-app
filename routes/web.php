<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\evento;
use App\Http\Controllers\CreacionEventosController;
use App\Http\Controllers\Lista_Evento;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\Pagina_Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


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
Route::get('/evento',[evento::class,'viewEvents']);

Route::get('/Creacion_Eventos',[CreacionEventosController::class,'Mostrar_Eventos']);
Route::post('/Creacion_Eventos',[CreacionEventosController::class,'Registro_Eventos'])->name('Eventos.Registro');

Route::get('/Lista_Evento',[EventoController::class,'Lista_Evento']);
//Route::post('/Lista_Evento',[ListaEventoController::class,'Filtrar_Eventos'])->name('Eventos.Filtrar');
Route::post('/Lista_Evento', [EventoController::class, 'getEventsByDateRange'])->name('eventos.search');
Route::get('/api/events', [EventoController::class, 'searchByDate'])->name('eventos.search');

Route::post('/events', [EventController::class, 'store'])->name('events.store');



// Rutas improvisadas para poder entrar a las paginas especificas desde el servidor montado en Laragon. 
// Solamente tienen que agarrar el nombre de la carpeta del archivo y pegarlo en el URL.
// Ejemplo: Quiero entrar a la vista de eventos, entonces sería http://127.0.0.1:8000/Evento 

Route::get('/', [landingController::class, 'index'])->name('landing.index');

Route::get('/Creacion_Eventos', function () {
    return view('.Creacion_Eventos/crearEventos');
});

Route::get('/Evento', function () {
    return view('.Evento/evento');
});

Route::get('/Evento/evento2', function () {
    return view('.Evento/evento2');
});

Route::get('/Evento/evento3', function () {
    return view('.Evento/evento3');
});

Route::get('/Evento/evento4', function () {
    return view('.Evento/evento4');
});

Route::get('/Lista_Evento', function () {
    return view('.Lista_Evento/listEvent2');
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
