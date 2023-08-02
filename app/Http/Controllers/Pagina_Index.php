<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagina_Index extends Controller
{
    public function Pagina_Index()
    {
        return view('Pagina_Index.index');
    }
}
