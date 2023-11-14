<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
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
    public function show()
    {
        //
        
      $matiere = Matiere::all();
     return view('matiere.liste',['matiere'=>$matiere]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $matiere = Matiere::findOrFail($id);
    return view('matiere.modifier', compact('matiere'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // Mettez à jour la matière
        $matiere = Matiere::findOrFail($id);
        $matiere->update($request->all());
        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matiere $matiere)
    {
        //
    }
}
