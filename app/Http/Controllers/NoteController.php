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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateNote($id)
    {
        
        //$note = Note::find($id);
        return view('note.modifier', compact('note'));
    }



    public function UpdateNoteTraitement(Request $request, $eleveId, $matiereId){
        $eleve = Eleve::find($eleveId);
       
        $eleve->matieres()->updateExistingPivot($matiereId, [
            'note' => $request->note,
        ])->wherePivot('id', $request->id);
    }
   

   
}
