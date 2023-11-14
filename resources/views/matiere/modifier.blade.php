
@extends('layout.master')
@section('contenue')

<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Modifier Matière</h1>
    </div>
    <form method="post" action="{{ route('matiere.update', $matiere->id) }}" class="user">
    @csrf
    @method('put')
    
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" value="{{$matiere->nomMatiere}}" class="form-control form-control-user" id="exampleFirstName" name="nomMatiere" placeholder="Nom matière">
                
            </div>
            <div class="col-sm-6">
                <input type="text" value="{{$matiere->coefficient}}" class="form-control form-control-user" id="coefficient" name="coefficient" placeholder="coefficient">
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary offset-4 mt-2">Soumettre</button>
   
    </form>
    
</div>
@endsection