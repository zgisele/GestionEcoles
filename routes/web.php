<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('eleves.ajouter');
});
Route::get('/eleves', [EleveController::class,'index']);
Route::get('modifiereleve/{id}', [EleveController::class,'UpdateEleve']);
Route::post('/modifiereleve/traitement', [EleveController::class,'UpdateEleveTraitement']);



Route::get('/note/{eleve_id}/{matiere_id}/edit', [NoteController::class, 'edit'])->name('editNote');
Route::patch('/note/{eleve_id}/{matiere_id}', [NoteController::class, 'update'])->name('updateNote');
