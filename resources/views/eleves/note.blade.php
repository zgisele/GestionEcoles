@extends('layout.master')
@section('contenue')

<div class="card shadow mb-4 p-5">
    <form method="post" action="{{'/note/ajouter/'. $eleve->id}}" class="user">
        @method('post')
        @csrf
        <div class="form-group row">
            <div class="col-sm-2 mb-3 mb-sm-0">
                <input type="text" name="note" class="form-control form-control-user" id="exampleFirstName" placeholder="Note">
            </div>
            <div class="col-sm-5 ">
                <select name="matiere_id" class="form-select form-control form-control-user text-primary">
                    @foreach ($matieres as $matiere)
                    <option value="{{$matiere->id}}">{{$matiere->nomMatiere}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-5 ">
                <input type="submit" class="btn btn-google btn-user btn-block " value="Ajouter">
            </div>
        </div>
    </form>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                    @foreach ($matiereEleves as $matiereEleve)
                    <tr>
                        <td>{{$matiereEleve->nomMatiere}}</td>
                        <td>{{$matiereEleve->pivot->note}}</td>
                        <td>{{$matiereEleve->coefficient}}</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-warning m-1">
                                <i class="fas fa-warning"></i> Modifier
                            </button>
                            <form action="{{'/note/supprimer/'.$matiereEleve->pivot->note.'/'. $eleve->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection