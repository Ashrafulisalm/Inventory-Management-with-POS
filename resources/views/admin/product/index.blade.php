@extends('layouts.adminLayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Product Details <a class="btn btn-success" style="float: right" href="{{url('/products/create')}}"> Add Product</a></div>


                <div class="card-body">
                    <table class="table table-striped table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Supplier</th>
                          <th scope="col">Exp. Date</th>
                          <th scope="col">Price</th>
                          <th scope="col">Cost</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $row)
                        <tr>
                          <td>{{$row->name}}</td>
                          <td>{{$row->supplier->name}}</td>
                          <td>{{$row->exp_date}}</td>
                          <td>{{$row->selling_price}}</td>
                          <td>{{$row->buying_price}}</td>
                          <td><img src="{{asset($row->product_image)}}" height="50" width="50"></td>
                          <td><a href="{{url('/products/view/'.$row->id)}}" class="fas fa-fw fa-eye"></a>
                              <a href="{{url('/products/edit/'.$row->id)}}" class="fas fa-fw fa-edit"></a>
                              <a href="{{url('/products/delete/'.$row->id)}}" class="fas fa-fw fa-trash-alt"></a></td>
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