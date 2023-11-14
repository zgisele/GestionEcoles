<?php

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
Route::get('/eleves', [EleveController::class,'index']);
Route::get('modifiereleve/{id}', [EleveController::class,'UpdateEleve']);
Route::post('/modifiereleve/traitement', [EleveController::class,'UpdateEleveTraitement']);

Route::get('modifiernote/{id}', [NoteController::class,'UpdateNote']);
Route::post('/modifiernote/traitement', [NoteController::class,'UpdateNoteTraitement']);


Route::get('/note/{eleve_id}/{matiere_id}/edit', [NoteController::class, 'edit'])->name('editNote');
Route::patch('/note/{eleve_id}/{matiere_id}', [NoteController::class, 'update'])->name('updateNote');
