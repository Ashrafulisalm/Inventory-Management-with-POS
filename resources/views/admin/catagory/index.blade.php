@extends('layouts.adminLayout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h5>Catagories</h5> <a class="btn btn-success" style="float: right" href="{{url('/product/catagory/create')}}">Add Catagory</a></div>


                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Catagory Id</th>
                              <th scope="col">Catagory Name</th>
                              <th scope="col">Action</th>                           
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($cata as $row)
                              <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td><a href="{{url('/product/catagory/edit/'.$row->id)}}" class="fas fa-fw fa-edit"></a><a href="{{url('/product/catagory/delete/'.$row->id)}}" class="fas fa-fw fa-trash-alt"></a></td>
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