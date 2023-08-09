<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventitoPapushoPop extends Controller
{
    public function store(Request $request)
    {
        // Process the form submission and save the event
        
        // Redirect to the index page after saving the event
        return redirect('/');
    }
    
}
