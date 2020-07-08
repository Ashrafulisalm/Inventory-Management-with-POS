@extends('layouts.adminLayout')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Update Expense -- {{$data->date}}</div>

	                <div class="card-body">

				        <div class="box-content">
				            <form action="{{url('/expense/update/'.$data->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
				            	@method('POST')
				                @csrf
				                <fieldset>
				                    <div class="form-group">
				                        <label for="details" class="col-sm-6 control-label">Expense details</label>
				                        <div class="col-md-12">
				                            <TEXTAREA class="form-control" rows="5" type="text" name="expense_details">{{$data->expense_details}}</TEXTAREA> 
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label for="details" class="col-sm-6 control-label">Expense Amount</label>
				                        <div class="col-md-12">
				                            <input type="text" name="expense_amount" value="{{$data->expense_amount}}" class="form-control">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <div class="col-md-12">
				                            <input type="hidden" name="date" value="{{$data->date}}">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <div class="col-md-12">
				                            <input type="hidden" name="month" value="{{$data->month}}">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <div class="col-md-12">
				                            <input type="hidden" name="year" value="{{$data->year}}">
				                        </div>
				                    </div>
				       				                   
				                    <div class="form-actions">
				                        <button type="submit" value="submit" class="btn btn-primary">Update</button>
				                        <button type="reset" style="float: right;" class="btn btn-danger">Cancel</button>
				                    </div>
				                </fieldset>
				            </form>
				        </div>
	               </div>
	           </div>
	       </div>
  		</div>
	</div>

@endsection