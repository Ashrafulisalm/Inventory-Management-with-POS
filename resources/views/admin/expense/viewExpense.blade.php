@extends('layouts.adminLayout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col"><span>Day: {{$day}}</span></div>
                        <div class="col"><span>Month: {{$month}}</span></div>
                        <div class="col"><span>Year: {{$year}}</span></div>
                      </div>                  
                    </div>

                    <div class="card-body">
                        <h3 style="text-align: center;">Total : {{$total}} tk</h3>
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr class="thead-dark">
                              <th scope="col">Expense Details</th>
                              <th scope="col">Expense Amount</th>
                              <th scope="col">Expense Date</th>                           
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($result as $row)
                              <tr>
                                <td>{{$row->expense_details}}</td>
                                <td>{{$row->expense_amount}}</td>
                                <td>{{$row->date}}</td>
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