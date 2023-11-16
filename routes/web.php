<?php


use App\Models\Matiere;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;

Route::get('/eleves', [EleveController::class, 'index']);
Route::delete('/eleves/{id}', [EleveController::class, 'destroy']);

Route::get('/eleves/ajouter', [EleveController::class, 'create']);
Route::post('/eleves/ajouterEleve', [EleveController::class, 'store']);
Route::get('modifiereleve/{id}', [EleveController::class, 'UpdateEleve']);
Route::post('/modifiereleve/traitement', [EleveController::class, 'UpdateEleveTraitement']);

Route::get('/eleves/notes/{id}', [NoteController::class, 'show']);
Route::post('/note/ajouter/{id}', [NoteController::class, 'store']);
Route::delete('/note/supprimer/{idNote}/{idEleve}', [NoteController::class, 'destroy']);

Route::get('/note/{idNote}/{idEleve}/modifier', [NoteController::class, 'edit']);
Route::put('/notes/{idNote}/{idEleve}', [NoteController::class, 'update']);
Route::delete('/matieres/{id}',  [MatiereController::class, 'destroy']);

Route::get('/matiere/{id}/modifier', [MatiereController::class, 'edit'])->name('matiere.modifier');
Route::put('/matiere/{id}', [MatiereController::class, 'update'])->name('matiere.update');
Route::get('/matieres',  [MatiereController::class, 'index']);
Route::get('/matieres/ajout', [MatiereController::class, 'create']);
Route::post('/matieres/ajoute', [MatiereController::class, 'store']);
