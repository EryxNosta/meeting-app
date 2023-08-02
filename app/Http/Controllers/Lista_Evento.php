<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evento;

class Lista_Evento extends Controller
{
    public function Lista_Evento()
    {
        return view('Lista_Evento.listEvent2');
    }

    public function Filtrar_Eventos(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $events = evento::whereBetween('event_date', [$startDate, $endDate])->get();

        return view('lista_evento.resultados', compact('events'));
    }
}
