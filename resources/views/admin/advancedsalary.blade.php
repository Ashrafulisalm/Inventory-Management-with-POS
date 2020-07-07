@extends('layouts.adminLayout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Salary Details <a class="btn btn-success" style="float: right" href="{{url('/salary/create')}}"> Advanced Salary</a></div>


                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Emp. Name</th>
                              <th scope="col">Emp. Salary</th>
                              <th scope="col">Month</th>
                              <th scope="col">Year</th>
                              <th scope="col">Advanced Salary</th>
                              <th scope="col">Photo</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $row)
                            <tr>
                              <td>{{$row->name}}</td>
                              <td>{{$row->salary}}</td>
                              <td>{{$row->month}}</td>
                              <td>{{$row->year}}</td>
                              <td>{{$row->advanced_salary}}</td>
                              <td><img src="{{asset($row->photo)}}" height="50" width="50"></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection