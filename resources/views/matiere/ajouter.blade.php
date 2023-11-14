
@extends('layout.master')
@section('contenue')
@if(count($errors) >0)
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @foreach($errors->all() as $error)
        {{$error}}
        <strong>OOPS!</strong> 
    @endforeach
</div>
@endif
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Ajout Matière</h1>
    </div>
    <form method="post" action="/matieres/ajoute" class="user">
    @csrf
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nomMatiere" placeholder="Nom matière">
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="coefficient" name="coefficient" placeholder="coefficient">
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary offset-4 mt-2">Soumettre</button>

    </form>
    
</div>
@endsection