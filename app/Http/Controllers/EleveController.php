<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$eleves = Eleve::orderBy('id','desc')->get();
        $eleves = Eleve::orderBy("id","desc")->cursorPaginate(2);
        return view('eleves.liste', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('eleves.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(['nom'=>'required|string|max:20'
    ],['prenom'=>'required|string|max:20'
    ],['dateNaissance'=>'required'],
    ['classe'=>'required'],
    ['sexe'=>'required']
);
        $eleves = new Eleve();
        $eleves->nom=$request->get('nom');
        $eleves->prenom=$request->get('prenom');
        $eleves->dateNaissance=$request->get('dateNaissance');
        $eleves->classe=$request->get('classe');
        $eleves->sexe=$request->get('sexe');
        $eleves->save();
            // return 'bonjour';
            return back();
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
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
    public function UpdateEleve($id)
    {
        $eleve = Eleve::find($id);
        return view('eleves.modifier', compact('eleve'));
    }


    public function UpdateEleveTraitement(Request $request)
    {
        $eleve = $request->validate([
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
    public function destroy($id)
    {
        $eleve = Eleve::find($id);
        $eleve->destroy($id);
        // dd($eleves);
        if ($eleve->save()) 
        {
            return Redirect::to('eleves');
        }
        
    }
}
