<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class evento extends Controller
{
    public function viewEvents()
    {
        return view('Evento.evento');
    }
    

}
