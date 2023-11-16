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
    {
        $request->validate(
            [
                "note" => "required",
                "matiere_id" => "required",
            ]
        );
        $eleve = Eleve::find($id);
        $matiere = Matiere::find($request->matiere_id);


        $eleve->matieres()->attach($matiere, ['note' => $request->note]);
        return back()->with('status', 'note ajoutee aavec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matiere = Matiere::all();
        $eleve = Eleve::find($id);
        $matiereEleves = $eleve->matieres()->get();


        return view("eleves.note", ["matieres" => $matiere, "eleve" => $eleve, "matiereEleves" => $matiereEleves]);
    }
    public function destroy($idNote, $idEleve)
    {

        // $eleve = Eleve::find($idEleve);
        // dd($eleve->matieres()->detach($idtablePivot));


        $eleve = Eleve::findOrFail($idEleve);
        $piv = $eleve->matieres()->wherePivot('id', $idNote);
        $piv->detach();

        return back()->with('status', 'note supprimee avec succes');
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idNote, $idEleve)
    {
        $eleve = Eleve::findOrFail($idEleve);
        $piv = $eleve->matieres()->wherePivot('id', $idNote)->first();

        return view('notes.modifier', ['piv' => $piv]);
    }

    public function update(Request $request, $idNote, $idEleve)
    {
        // Valider les données du formulaire
        $request->validate(
            [
                'note' => 'required',
            ]
        );

        $eleve = Eleve::findOrFail($idEleve);
        $matiere = Matiere::get();

        $eleve->matieres()
            ->wherePivot(
                'id',
                $idNote
            )->updateExistingPivot(
                $matiere,
                ['note' => $request->input('note')]
            );
        return Redirect::to('/eleves/notes/' . $idEleve)->with('success', 'Note mise à jour avec succès');
    }
}
