@extends('layout.master')
@section('contenue')

<div class="container">
    <div class="card">
        <div class="col-md-6 offset-3 mt-5">
            <h5 class="card-header text-center bg-primary text-white">AJOUT ELEVE</h5>
            <div class="card-body">
                <form method="post" action="/eleves/ajouterEleve">
                     @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" id="prenom"  name="prenom"  placeholder="prenom">
                    </div>
                    <div class="form-group">
                        <label for="dateNaissance">Date de naissance</label>
                        <input type="Date" class="form-control" id="dateNaissance"  name="dateNaissance"  placeholder="dateNaissance">
                    </div>
                    <div class="form-group">
                            <select name="classe" id="classe" style="width:100%;">
                                <option value="6e">6e</option>
                                <option value="5e">5e</option>
                                <option value="4e">4e</option>
                                <option value="3e">3e</option>
                                <option value="2nd">2nd</option>
                                <option value="tle">TLe</option>
                            </select>
                        <!-- <label for="classe">Classe</label>
                        <input type="text" class="form-control" id="classe"  name="classe" placeholder="classe"> -->
                    </div>
                    <div class="form-group" >
                            <select name="sexe" id="sexe" style="width:100%;">
                                <option value="Feminin">Feminin</option>
                                <option value="Masculin">Masculin </option>
                            </select>
                    </div>
                    <input type="submit" name="Register" value="Register " class="form-control form-control-user" id="Register">
                    </form>
                        @endsection
                        