@extends('layouts.adminLayout')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">Create New Supplier</div>

	                <div class="card-body">

				        <div class="box-content">
				            <form action="{{url('/suppliers/store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
				            	@method('POST')
				                @csrf
				                <fieldset>
				                    <div class="form-group">
				                        <label for="name" class="col-sm-2 control-label">Name</label>
				                        <div class="col-md-8">
				                        	<input type="hidden" name="id">
				                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Email</label>
				                        <div class="col-md-8">
				                            <input type="email" id="email" name="email" required="" placeholder="Enter Email" class="form-control" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Phone</label>
				                        <div class="col-md-8">
				                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Address</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="" maxlength="50" required="">
				                        </div>
				                    </div>


				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Type</label>
				                        <div class="col-md-8">
				                            <select class="custom-select" id="type" name="type">
				                                <option selected>Choose Type</option>
				                                <option value="1">1.Distributor</option>
				                                <option value="2">2.Wholeseller</option>
				                                <option value="3">3.Brocure</option>
				                              </select>
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Shop</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="shop" name="shop" placeholder="Enter Shop" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Acc_Holder</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="account_holder" name="account_holder" placeholder="Enter Acc_Holder" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Acc_Number</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Enter Acc_Number" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Bank_Name</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Enter Bank_Name" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Bank_Branch</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="bank_branch" name="bank_branch" placeholder="Enter Bank_Branch" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">City</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Photo</label>
				                        <div class="col-md-8">
				                            <input type="file" class="form-control" name="photo" required="">
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