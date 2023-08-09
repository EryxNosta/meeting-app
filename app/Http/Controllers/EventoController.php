<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function Lista_Evento()
    {
        return view('Lista_Evento.listEvent2');
    }

    public function getEventsByDateRange(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $events = Evento::whereBetween('even_date', [$startDate, $endDate])->get();

        return view('lista_evento.resultados', compact('events'));
    }
    
    public function searchByDate(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Realiza la consulta a la base de datos para obtener los eventos entre las fechas
        $events = Evento::whereBetween('even_date', [$startDate, $endDate])->get();

        return response()->json($events);
    }
}
