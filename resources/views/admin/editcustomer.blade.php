@extends('layouts.adminLayout')

@section('content')
  
  	<div class="container">
  	    <div class="row justify-content-center">
  	        <div class="col-md-12">
  	            <div class="card">
  	                <div class="card-header">Update Customer</div>

  	                <div class="card-body">

  				        <div class="box-content">
  				            <form action="{{URL::to('/customers')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
  				            	@method('POST')
  				                @csrf
  				                <fieldset>
  				                    <div class="form-group">
                                <input type="hidden" name="id" value="{{$customer->id}}">
  				                        <label for="name" class="col-sm-2 control-label">Name</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$customer->name}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Email</label>
  				                        <div class="col-md-8">
  				                            <input type="email" id="email" name="email" required="" placeholder="Enter Email" value="{{$customer->email}}" class="form-control" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Phone</label>
  				                        <div class="col-md-8">
  				                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{$customer->phone}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Address</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{$customer->address}}" maxlength="50" required="">
  				                        </div>
  				                    </div>


  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Shop_Name</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="shop_name" name="shop_name" placeholder="Enter Shop_Name" value="{{$customer->shop_name}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Acc_Holder</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="account_holder" name="account_holder" placeholder="Enter Acc_Holder" value="{{$customer->account_holder}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Acc_Number</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Enter Acc_Number" value="{{$customer->account_number}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Bank_Name</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Enter Bank_Name" value="{{$customer->bank_name}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">Bank_Branch</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="bank_branch" name="bank_branch" placeholder="Enter Bank_Branch" value="{{$customer->bank_branch}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
  				                        <label class="col-sm-2 control-label">City</label>
  				                        <div class="col-md-8">
  				                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{$customer->city}}" maxlength="50" required="">
  				                        </div>
  				                    </div>

  				                    <div class="form-group">
                                <label class="col-sm-2 control-label">Photo</label>
                                <div class="col-md-8">
                                  <input type="file" class="form-control" name="photo">
                                    <input type="hidden" class="form-control" name="oldphoto" value="{{$customer->photo}}">Old Image-><img src="{{asset($customer->photo)}}" height="50" width="50">
                                </div>
                            </div>

  				                    <div class="form-actions">
  				                        <button type="submit" value="submit" class="btn btn-primary">Save</button>
  				                        <button type="reset" class="btn">Cancel</button>
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