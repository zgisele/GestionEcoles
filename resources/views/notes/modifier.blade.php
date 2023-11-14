@extends('layout.master')
@section('contenue')
    
    <div class="container">
        <div class="card">
            <div class="col-md-6 offset-3 mt-5">
                <h5 class="card-header text-center bg-primary text-white">Modifier la note de {{ $eleve->nom }} pour {{ $matiere->nom }}</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('updateNote', ['eleve_id' => $eleve->id, 'matiere_id' => $matiere->id]) }}">
                        @csrf
                        @method('PATCH')
                
                        <!-- Champs pour la modification de la note -->
                        <label for="note">Note :</label>
                        <input type="text" name="note" value="{{ $note->note }}" required>
                
                        <!-- Bouton de soumission du formulaire -->
                        <button type="submit">Modifier la note</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection