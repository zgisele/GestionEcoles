<?php

use App\Models\Matiere;
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

// Route::get('/', function () {
//     return view('eleves.liste');
// });
Route::get('/eleves', [EleveController::class,'index']);
Route::get('/eleves/{id}', [EleveController::class,'destroy']);Route::get('/matieres',  [MatiereController::class,'index']);
Route::get('/matieres/ajout', [MatiereController::class,'create']);
Route::post('/matieres/ajoute', [MatiereController::class, 'store']);
