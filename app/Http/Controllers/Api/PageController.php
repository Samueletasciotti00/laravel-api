<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Tag;

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

    public function projectBySlug($slug)
    { // Passiamo lo slug

        // Prendo un elemento dal DB che ha lo slug passato nella funzione projectBySlug($slug)
        $project = Project::where('slug', $slug)->with('category', 'tags')->first();

        // Validazione della chiamata
        if ($project) {
            $success = true;
        } else {
            $success = false;
        }

        return response()->json(compact('project', 'success'));
    }

    public function tags()
    {

        // Prendere tutti i tag dal db con la querytag
        $tags = Tag::all();

        // Verificare lo stato della chiamata
        $success = true;

        // Gestione risposta
        $response = [
            'success' => $success,
            'result' => $tags
        ];


        return response()->json($tags);
    }

    //Funzione per le categorie
    public function categoryes(){

        // Prendere tutte le categoryes dal db con la query categoryes
        $categoryes = Category::all();

        // Verificare lo stato della chiamata
        $success = true;

        // Gestione risposta
        $response = [
            'success' => $success,
            'result' => $categoryes
        ];

        return response()->json($categoryes);
    }
}
