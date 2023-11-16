@extends('layout.master')
@section('contenue')

<div class="row d-flex justify-content-between">
    <div class="card shadow mb-5 p-5 col-md-5">
        <form method="post" action="{{'/note/ajouter/'. $eleve->id}}" class="user">
            @method('post')
            @csrf
            <div class="form-group">
                <input type="text" name="note" class="form-control form-control-user" id="exampleFirstName" placeholder="Note">
            </div>
            <div class="form-group mb-4">
                <select name="matiere_id" class="form-control-user p-3">
                    @foreach ($matieres as $matiere)
                    <option value="{{$matiere->id}}">{{$matiere->nomMatiere}}</option>
                    @endforeach
            </div><br>
            <div class="form-group py-4">
                <input type="submit" class="btn btn-google btn-user btn-block " value="Ajouter">
            </div>
        </form>
    </div>
    <div class="card shadow mb-5 p-5 col-md-5">
        {{$eleve->nom}}
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des notes</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Matieres</th>
                        <th>Notes</th>
                        <th>coefficients</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($matiereEleves as $matiereEleve)
                    <tr>
                        <td>{{$matiereEleve->nomMatiere}}</td>
                        <td>{{$matiereEleve->pivot->note}}</td>
                        <td>{{$matiereEleve->coefficient}}</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="{{'/note/'.$matiereEleve->pivot->id.'/'. $eleve->id.'/modifier'}}" class="btn btn-warning m-1">
                                <i class="fas fa-warning"></i> Modifier
                            </a>
                            <form action="{{'/note/supprimer/'.$matiereEleve->pivot->id.'/'. $eleve->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <p>L'etudiant n'a pas encore de note</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection