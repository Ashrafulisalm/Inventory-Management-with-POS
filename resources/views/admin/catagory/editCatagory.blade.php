@extends('layouts.adminLayout')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-6">
	            <div class="card">
	                <div class="card-header">Edit Catagory</div>

	                <div class="card-body">

				        <div class="box-content">
				            <form action="{{url('/product/catagory/store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
				            	@method('POST')
				                @csrf
				                <fieldset>
				                	<input type="hidden" name="id" value="{{$data->id}}">
				                    <div class="form-group">
				                        <label for="name" class="col-sm-6 control-label">Catagory Name</label>
				                        <div class="col-md-12">
				                            <input type="text" name="name" value="{{$data->name}}">
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