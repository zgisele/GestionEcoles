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
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    

                    @foreach($matiere as $m)
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>{{$m->nomMatiere}}</td>
                        <td>{{$m->coefficient}}</td>
                        <td class=" d-flex justify-content-center items-center ">
                            <a href="/matiere/{{$m->id}}/modifier" class="btn btn-warning m-1 px-3 pr-3">
                                <i class="fas fa-exclamation-triangle"></i> Modifier
                            </a>
                            <form action="/matieres/{{$m->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger m-1 px-3 pr-3">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection