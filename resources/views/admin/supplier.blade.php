@extends('layouts.adminLayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Supplier Details <a class="btn btn-success" style="float: right" href="{{url('/suppliers/create')}}" id="createEmployee"> Add Supplier</a></div>


                <div class="card-body">
                    <table class="table table-striped table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Name</th>
                          <!-- <th scope="col">Email</th> -->
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">Shop_Name</th>
                          <th scope="col">Ac_Holder</th>
                          <th scope="col">Ac_Number</th>
                          <th scope="col">Bank_name</th>
                          <th>Type</th>
                          <th>Image</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	 @foreach($supplier as $row)
                          <tr>
                            <th>{{$row->name}}</th>
                            <!-- <td>{{$row->email}}</td> -->
                            <td>{{$row->phone}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->shop}}</td>
                            <td>{{$row->account_holder}}</td>
                            <td>{{$row->account_number}}</td>
                            <td>{{$row->bank_name}}</td>
                            @if(($row->type)==1)
                              <td>Distributor</td>
                            @elseif(($row->type)==2)
                              <td>Supllier</td>
                            @else
                              <td>Brocure</td>
                            @endif
                            <td><img src="{{asset($row->photo)}}" height="50" width="50"></td>
                            <td class="center">
                                <a class="fas fa-fw fa-edit" href="{{url('/suppliers/edit/'.$row->id)}}">
                                </a>
                                <a class="fas fa-fw fa-trash-alt" href="{{url('/suppliers/delete/'.$row->id)}}">
                                </a>
                            </td>
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