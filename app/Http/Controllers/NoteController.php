<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
{}

    



    /**
     * Show the form for editing the specified resource.
     */
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
        return redirect('/eleves/notes/'.$eleve_id)->with('success', 'Note mise à jour avec succès');
    }
   

   
}
