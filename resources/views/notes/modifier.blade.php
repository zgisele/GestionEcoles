@extends('layout.master')
@section('contenue')

    <div class="container">
        <div class="card">
            <div class="col-md-6 offset-3 mt-5">{{$matiere->nom}}
                <h5 class="card-header text-center bg-primary text-white">Modifier la note de {{ $eleve->nom }} pour {{ $matiere->nom }}</h5>
                <div class="card-body">
                    <form method="post" action="/note/{{ $eleve->id}}/{{$matiere->id}}">
                        @csrf.
                        @method('patch')

                        <!-- Champs pour la modification de la note -->
                        <label for="note">Note :</label>
                        <input type="text" name="note" value="{{ $note->pivot->note }}" required>

                        <!-- Bouton de soumission du formulaire -->

                        <button type="submit">Modifier la note</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection