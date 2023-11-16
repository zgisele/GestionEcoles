@extends('layout.master')
@section('contenue')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-primary text-white">Modifier la note de pour </h5>
            <div class="card-body">
                <form method="post" action="/notes/{{$piv->pivot->id}}/{{$piv->pivot->eleve_id}}">
                    @method('put')
                    @csrf

                    <!-- Champs pour la modification de la note -->
                    <label for="note">Note :</label>
                    <input type="text" name="note" value="{{ $piv->pivot->note }}" required>

                    <!-- Bouton de soumission du formulaire -->

                    <button type="submit">Modifier la note</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection