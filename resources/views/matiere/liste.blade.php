@extends('layout.master')
@section('contenue')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des matières</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom matière</th>
                        <th>Coéfficient</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($matiere as $m)
                    <tr>
                        <td>{{$m->nomMatiere}}</td>
                        <td>{{$m->coefficient}}</td>
                        <td class=" d-flex justify-content-center items-center ">
                            <button type="submit" value="/modifiereleve/{{$m->id}}" class="btn btn-warning m-1 px-3 pr-3">
                                <i class="fas fa-exclamation-triangle"></i> Modifier
                            </button>
                            <button type="submit" class="btn btn-danger m-1 px-3 pr-3">
                                <i class="fas fa-trash"></i> Supprimer
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection