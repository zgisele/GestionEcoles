@extends('layout.master')
@section('contenue')
    
    <div class="container">
        <div class="card">
            <div class="col-md-6 offset-3 mt-5">
                <h5 class="card-header text-center bg-primary text-white">MODIFIER ELEVE</h5>
                <div class="card-body">

                    <form method="post" action="/modifiereleve/traitement">
                        @csrf
                        <input type="text" name="id", style="display: none" value="{{$eleve->id}}">
                        <div class="form-group">
                            <label for="nomArticle">Nom</label>
                            <input type="text" class="form-control" id="nomArticle"  value="{{$eleve->nom}}" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="nomContenu">Prenom</label>
                            <input type="text" class="form-control" id="nomContenu"  value="{{$eleve->prenom}}" name="prenom">
                        </div>
                        
                        <div class="form-group">
                            <label for="nomContenu">Date de Naissance</label>
                            <input type="text" class="form-control" id="nomContenu"  value="{{$eleve->dateNaissance}}" name="dateNaissance">
                        </div>

                        <div class="form-group">
                            <label for="nomContenu">Classe</label>
                            <input type="text" class="form-control" id="nomContenu"  value="{{$eleve->classe}}" name="classe">
                        </div>

                        <div class="form-group">
                            <label for="nomContenu">Sexe</label>
                            <input type="text" class="form-control" id="nomContenu"  value="{{$eleve->sexe}}" name="sexe">
                        </div>
                        
                        <button type="submit" class="btn btn-primary offset-4 mt-2">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection