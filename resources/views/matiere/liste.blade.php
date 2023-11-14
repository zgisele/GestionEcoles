@extends('layout.master')
@section('contenue')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- <thead>
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
                </tfoot> -->
                <tbody>
                    @foreach($matiere as $matiere){
                    <tr>
                        <td>{{$matiere->id}}</td>
                        <td>{{$matiere->nomMatiere}}</td>
                        <td>{{$matiere->coefficient}}</td>
                    </tr>
                    <a href="/matiere/modifier."{{$matiere->id}}> Modifier</a>
                    }
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection