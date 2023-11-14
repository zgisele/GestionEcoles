<?php

use App\Models\Eleve;
use App\Http\Controllers\NoteController;
use App\Models\Matiere;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EleveController;

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

// Route::get('/matiere', function () {
//     return view('.ajouter');
// });

Route::get('/eleves', [EleveController::class,'index']);
Route::get('/eleves/ajouter',[EleveController::class,'create']);
Route::post('/eleves/ajouterEleve',[EleveController::class,'store']);




Route::get('/matiere/{id}/modifier', [MatiereController::class, 'edit'])->name('matiere.modifier');
Route::put('/matiere/{id}', [MatiereController::class, 'update'])->name('matiere.update');

Route::get('/eleves',  [EleveController::class, 'index']);

Route::get('/eleves/notes/{id}', [NoteController::class, 'show']);
Route::post('/note/ajouter/{id}', [NoteController::class, 'store']);
Route::delete('/note/supprimer/{idNote}/{idEleve}', [NoteController::class, 'destroy']);
Route::get('/matieres',  [MatiereController::class,'index']);
Route::get('/matieres/ajout', [MatiereController::class,'create']);
Route::post('/matieres/ajoute', [MatiereController::class, 'store']);
