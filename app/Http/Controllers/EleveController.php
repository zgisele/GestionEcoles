<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::orderBy('id','desc')->get();
        return view('eleves.liste', compact('eleves'));
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
    public function show(Eleve $eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateEleve($id)
    {
        $eleve = Eleve::find($id);
        return view('eleves.modifier', compact('eleve'));
    }


    public function UpdateEleveTraitement(Request $request)
    {
        $articlereq = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'dateNaissance' => 'required',
            'classe' => 'required',
            'sexe' => 'required'

        ]);
        $eleve = Eleve::find($request->id);
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->dateNaissance = $request->dateNaissance;
        $eleve->classe = $request->classe;
        $eleve->sexe = $request->sexe;


        $eleve->Update();
        return redirect('/eleves');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}
