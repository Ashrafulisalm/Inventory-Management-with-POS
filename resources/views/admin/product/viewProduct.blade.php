@extends('layouts.adminLayout')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">Product Details</div>

	                <div class="card-body">
	                	<table>
	                		<tr>
	                			<th>Product Id</th>
	                			<th>  </th>
	                			<td>{{$data->id}}</td>
	                		</tr>
	                		<tr>
	                			<th>Product Name</th><th>  </th>
	                			<td>{{$data->name}}</td>
	                		</tr>
	                		<tr>
	                			<th>Product Catagory</th><th>  </th>
	                			<td>{{$data->catagory->name}}</td>
	                		</tr>
	                		<tr>
	                			<th>Product Supplier</th><th></th>
	                			<td>{{$data->supplier->name}}</td>
	                		</tr>
	                		<tr>
	                			<th>Product Code</th><th></th>
	                			<td>{{$data->product_code}}</td>
	                		</tr>
	                		<tr>
	                			<th>Garage No.</th><th></th>
	                			<td>{{$data->product_garage}}</td>
	                		</tr>
	                		<tr>
	                			<th>Route No.</th><th></th>
	                			<td>{{$data->product_route}}</td>
	                		</tr>
	                		<tr>
	                			<th>Product MNF. Data</th><th></th>
	                			<td>{{$data->buy_date}}</td>
	                		</tr>
	                		<tr>
	                			<th>Product EXP. Date</th><th></th>
	                			<td>{{$data->exp_date}}</td>
	                		</tr>
	                		<tr>
	                			<th>Buy Price</th><th></th>
	                			<td>{{$data->buying_price}}</td>
	                		</tr><tr>
	                			<th>Sell Price</th><th></th>
	                			<td>{{$data->selling_price}}</td>
	                		</tr>
	                		<tr>
	                			<th>Product Photo</th><th></th>
	                			<td><img src="{{asset($data->product_image)}}" height="200" width="200"></td>
	                		</tr>
	                	</table>
	               </div>
	           </div>
	       </div>
  		</div>
	</div>

@endsection