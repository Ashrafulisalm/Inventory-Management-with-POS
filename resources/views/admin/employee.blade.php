@extends('layouts.adminLayout')

@section('content')

	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">
	                    Employee Details
	                    <input type="hidden" id="employeeData" name="" value="true">
	                    <!-- Button trigger modal -->
	                    <a class="btn btn-success" style="float: right" href="javascript:void(0)" id="createEmployee"> Add Employee</a>

	                </div>

	                <div class="card-body">
	                	<div class="table-responsive-lg">
	                    <table class="table table-bordered table-hover table-sm data-table">
	                        <thead>
	                        <tr>
	                            <!-- <th>Id</th> -->
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Phone</th>
	                            <th>Address</th>
	                            <th>Experiance</th>
	                            <!-- <th>N_id</th> -->
	                            <th>Salary</th>
	                            <th>Vacation</th>
	                            <th>City</th>
	                            <!-- <th>Photo</th> -->
	                            <th width="280px">Action</th>
	                        </tr>
	                        </thead>
	                        <tbody>
	                        </tbody>
	                    </table>
	                </div>
	                </div>
	            </div>
	            <!-- Modal -->
	            <div class="modal fade" id="ajaxModel" aria-hidden="true">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <h4 class="modal-title" id="modelHeading"></h4>
	                        </div>
	                        <div class="modal-body">
	                            <form id="employeeForm" name="employeeForm" class="form-horizontal" enctype="multipart/form-data">
	                                <input type="hidden" name="employee_id" id="employee_id">
	                                <div class="form-group">
	                                    <label for="name" class="col-sm-2 control-label">Name</label>
	                                    <div class="col-md-12">
	                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">Email</label>
	                                    <div class="col-md-12">
	                                        <input type="email" id="email" name="email" required="" placeholder="Enter Email" class="form-control" required="">
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">Phone</label>
	                                    <div class="col-md-12">
	                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="" maxlength="50" required="">
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">Address</label>
	                                    <div class="col-md-12">
	                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="" maxlength="50" required="">
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">Experiance</label>
	                                    <div class="col-md-12">
	                                    	<select class="custom-select" name="experiance" id="experiance">
	                                    	  <option selected>Experiance</option>
	                                    	  <option>1 Year</option>
	                                    	  <option>2 Year</option>
	                                    	  <option>3 Year</option>
	                                    	  <option>4 Year+</option>
	                                    	</select>
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">N_id</label>
	                                    <div class="col-md-12">
	                                        <input type="number" class="form-control" id="n_id" name="n_id" placeholder="Enter N_id" value="" maxlength="50" required="">
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">Salary</label>
	                                    <div class="col-md-12">
	                                        <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter Salary" value="" maxlength="50" required="">
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">Vacation</label>
	                                    <div class="col-md-12">
	                                        <input type="text" class="form-control" id="vacation" name="vacation" placeholder="Enter Vacation" value="" maxlength="50" required="">
	                                    </div>
	                                </div>

	                                <div class="form-group">
	                                    <label class="col-sm-2 control-label">City</label>
	                                    <div class="col-md-12">
	                                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="" maxlength="50" required="">
	                                    </div>
	                                </div>

	                                <!-- <div class="form-group">
	                                    <label class="col-sm-2 control-label">Photo</label>
	                                    <div class="col-md-12">
	                                        <input type="file" class="form-control" id="photo" name="photo" placeholder="Enter Photo" value="" maxlength="50" required="">
	                                    </div>
	                                </div> -->

	                                <div class="col-sm-offset-2 col-sm-10">
	                                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save Employee
	                                    </button>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>


	        </div>
	    </div>
	</div>



@endsection
