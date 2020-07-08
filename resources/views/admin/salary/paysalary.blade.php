@extends('layouts.adminLayout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h5>Salary({{date("F Y")}})</h5> <a class="btn btn-success" style="float: right" href="{{url('/salary/create')}}"> Pay Salary</a></div>


                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Emp. Name</th>
                              <th scope="col">Photo</th>
                              <th scope="col">Salary</th>
                              <th scope="col">Advanced</th>
                              <th scope="col">Pay Amount</th>
                              <th scope="col">Month</th>
                              <th scope="col">Action</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $row)
                            <tr>
                              <td>{{$row->name}}</td>
                              <td><img src="{{asset($row->photo)}}" height="50" width="50"></td>
                              <td>{{$row->salary}}</td>
                              <?php $ad=App\Advancedsalary::where('employee_id',$row->id)->where('month',date("F", strtotime("-1 months")))->first();
                                
                                if($ad){
                                  
                               ?>
                              <td>{{$ad->advanced_salary}}</td>
                              <?php }else { ?>
                                <td></td>
                              <?php } ?>
                              <td></td>
                              <td>{{date("F", strtotime("-1 months"))}}</td>
                              <td><a class="btn btn-primary" href="">Pay Salary</a>
                              
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