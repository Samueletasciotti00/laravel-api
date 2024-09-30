<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){

        // Richiamo tutti i dati dal DB
        $projects = Project::all();

        // Verificare lo stato della chiamata
        $success = true;

        $response = [
            'success' => $success,
            'result' => $projects
        ];

        return response()->json($projects);
   }
}
