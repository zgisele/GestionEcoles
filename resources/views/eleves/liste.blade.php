@extends('layout.master')
@section('contenue')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date Naissance</th>
                            <th>Classe</th>
                            <th>Sexe</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eleves as $eleve)
                            <tr>
                                <td>{{ $eleve->nom }}</td>
                                <td>{{ $eleve->prenom }}</td>
                                <td>{{ $eleve->dateNaissance }}</td>
                                <td>{{ $eleve->classe }}</td>
                                <td>{{ $eleve->sexe }}</td>
                                <td>
                                    <div class="mt-4 mb-2">
                                    </div>
                                    <a href="#" class="btn btn-info btn-circle btn-lg">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="/modifierEleve/{{ $eleve->id }}" class="btn btn-warning btn-circle btn-lg">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </a>
                                    <a href="/eleves/{{ $eleve->id }}" class="btn btn-danger btn-circle btn-lg">
                                        <i class="fas fa-trash"></i>
                                    </a>
            </div>
        </div>

        </td>

        </tr>
        @endforeach

        </tbody>
        </table>
    </div>
    </div>
    </div>
@endsection
