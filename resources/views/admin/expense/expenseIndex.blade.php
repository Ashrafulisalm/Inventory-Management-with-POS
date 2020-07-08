@extends('layouts.adminLayout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Expense:  </b>{{date("d/m/y")}}<a class="btn btn-success" style="float: right" href="{{url('/expense/create')}}">Add Expense</a>
                      <a class="btn btn-primary" style="float: center" href="{{url('/expense/specific')}}">View Specific Expense</a>
                    </div>


                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Expense Details</th>
                              <th scope="col">Expense Amount</th>
                              <th scope="col">Action</th>                           
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($expense as $row)
                              <tr>
                                <td>{{$row->expense_details}}</td>
                                <td>{{$row->expense_amount}}</td>
                                <td><a href="{{url('/expense/edit/'.$row->id)}}" class="fas fa-fw fa-edit"></a></td>
                              </tr>
                            @endforeach
                              <tr class="table-success">
                                <th>Total</th>
                                <td>{{$total}}</td>
                              </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection