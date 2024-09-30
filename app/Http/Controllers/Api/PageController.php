<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{

    //Funzione generica di tutti i progetti
    public function index()
    {

        // Richiamo tutti i dati dal DB
        $projects = Project::orderBy('id')->with('category', 'tags')->paginate(5); // Paginate usa il GET

        // Verificare lo stato della chiamata
        $success = true;

        // Gestione risposta
        $response = [
            'success' => $success,
            'result' => $projects
        ];

        return response()->json($projects);
    }

    public function projectBySlug($slug) { // Passiamo lo slug

        
    }
}
