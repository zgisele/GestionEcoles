@extends('layout.master')
@section('contenue')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des élèves</h6>
    </div>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
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
                @if(count($eleves) > 0)
                    @php $i = 0; @endphp
                  @foreach($eleves as $eleve)  
                    <tr>
                        <td>{{$eleve->nom}}</td>
                        <td>{{$eleve->prenom}}</td>
                        <td>{{$eleve->dateNaissance}}</td>
                        <td>{{$eleve->classe}}</td>
                        <td>{{$eleve->sexe}}</td>
                        <td class="d-flex justify-content-center items-center">
                            <div class="mt-4 mb-2">
                                    </div>
                                    <button type="submit" class="btn btn-info m-1 px-3 pr-3">
                                        <i class="fas fa-info-circle"></i> Détails
                                    </button>
                                    <button type="submit" class="btn btn-warning m-1 px-3 pr-3">
                                        <i class="fas fa-exclamation-triangle"></i> Modifier
                                    </button>
                                    <button type="submit" class="btn btn-danger m-1 px-3 pr-3">
                                        <i class="fas fa-trash"></i> Supprimer
                                    </button>
                                </div>
                            </div>

                        </td>

                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
            {!! $eleves->links() !!}

        </div>
    </div>
</div>

@endsection