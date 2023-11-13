@extends('layout.master')
@section('contenue')

<div class="card shadow mb-4 p-5">
    <form class="user">
        <div class="form-group row">
            <div class="col-sm-2 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
            </div>
            <div class="col-sm-5 ">
                <select class="form-select form-control form-control-user text-primary" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($matieres as $matiere)
                    <option value="{{$matiere->id}}">{{$matiere->id}}</option>
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

                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection