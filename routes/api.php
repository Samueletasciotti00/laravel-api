<?php

use App\Http\Controllers\Api\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Funzione di index
Route::get('/',[PageController::class,'index']);

// Funzione di ricerca per SLUG
Route::get('/project-by-slug/{slug}',[PageController::class,'projectBySlug']);

// Funzione di ricerca per TAG
Route::get('/tags',[PageController::class,'tags']);

// Funzione di ricerca per CATEGORIA
Route::get('/categoryes',[PageController::class,'categoryes']);