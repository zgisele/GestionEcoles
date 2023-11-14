@extends('layout.master')
@section('contenue')
    
    <div class="container">
        <div class="card">
            <div class="col-md-6 offset-3 mt-5">
                <h5 class="card-header text-center bg-primary text-white">MODIFIER Note</h5>
                <div class="card-body">

                    <form method="post" action="/modifiernote/traitement">
                        @csrf
                        <input type="text" name="id", style="display: none" value="{{$note->id}}">
                        <div class="form-group">
                            <label for="nomArticle">Note</label>
                            <input type="text" nam="note" class="form-control" id="nomArticle"  value="{{$note->valeur}}" name="valeur">
                        </div>
                       
                        <button type="submit" class="btn btn-primary offset-4 mt-2">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection