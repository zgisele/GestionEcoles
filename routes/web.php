<?php

use App\Models\Eleve;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('eleves.ajouter');
});
Route::get('/eleves',  [EleveController::class, 'index']);

Route::get('/eleves/notes/{id}', [NoteController::class, 'show']);
Route::post('/note/ajouter/{id}', [NoteController::class, 'store']);
Route::delete('/note/supprimer/{idNote}/{idEleve}', [NoteController::class, 'destroy']);
