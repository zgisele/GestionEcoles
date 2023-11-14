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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
