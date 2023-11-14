<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matiere = Matiere::all();
        return view("matiere.liste", compact("matiere"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("matiere.ajouter");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nomMatiere" => "required|String|min:5,max:40",
            "coefficient" => "required|integer|"
        ]);
        $matiere = new Matiere();
        $matiere->nomMatiere = $request->nomMatiere;
        $matiere->coefficient = $request->coefficient;
        if ($matiere->save()) {
            echo "Ajout reussi";
            return Redirect::to('/matieres');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //

        $matiere = Matiere::all();
        return view('matiere.liste', ['matiere' => $matiere]);
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
    public function update(Request $request, $id)
    {
        // Mettez à jour la matière
        $matiere = Matiere::findOrFail($id);
        $matiere->update($request->all());
        return Redirect::to('/matieres');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $matiere = Matiere::find($id);
        $matiere->delete();

        return Redirect::to('/matieres');
    }
}
