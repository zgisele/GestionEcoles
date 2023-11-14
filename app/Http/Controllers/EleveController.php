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
    public function update(Request $request, Eleve $eleve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eleves = Eleve::find($id);
        $eleves->destroy($id);
        // dd($eleves);
        if ($eleves->save()) 
        {
            return Redirect::to('eleves');
        }
        
    }
}
