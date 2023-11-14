<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\MatiereController;

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

