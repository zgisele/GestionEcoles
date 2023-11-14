<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Laravel\Prompts\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

   // app/Http/Controllers/NoteController.php


    

    public function edit($eleve_id, $matiere_id)
    {
        // Récupérer l'élève et la matière
        $eleve = Eleve::findOrFail($eleve_id);
        $matiere = Matiere::findOrFail($matiere_id);

        // Récupérer la note de l'élève pour la matière spécifiée
        $note = $eleve->matieres()->where('matiere_id', $matiere_id)->first();

        // Charger la vue pour la modification avec les données de la note
        return view('notes.modifier', compact('eleve', 'matiere', 'note'));
    }

    public function update($eleve_id, $matiere_id)
    {
        // Valider les données du formulaire
        request()->validate([
            'note' => 'required|numeric',
        ]);

        // Mettre à jour la note
        $eleve = Eleve::findOrFail($eleve_id);
        $eleve->matieres()->updateExistingPivot($matiere_id, ['note' => request('note')]);

        // Rediriger avec un message de succès
        return redirect('/listeNote')->with('success', 'Note mise à jour avec succès');
    }

  
}


