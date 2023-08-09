<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evento;

class CreacionEventosController extends Controller
{
    public function Mostrar_Eventos()
    {
        return view('Creacion_Eventos.crearEventos');
    }
    
    public function Registro_Eventos(Request $request)
    {
        $event = new evento();
        $event->even_nom=$request->even_nom;
        $event->even_desc=$request->even_desc;
        $event->even_date=$request->even_date;
        $event->even_adrs=$request->even_adrs;
        $event->emp_id=1;
        $event->cat_id=1;
        $event->save();
    }

}
