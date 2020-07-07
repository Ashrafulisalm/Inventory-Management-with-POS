@extends('layouts.adminLayout')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">Give Advanced Salary</div>

	                <div class="card-body">

				        <div class="box-content">
				            <form action="{{url('/salary/store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
				            	@method('POST')
				                @csrf
				                <fieldset>
				                	<input type="hidden" name="id">
				                    <div class="form-group">
				                        <label for="name" class="col-sm-2 control-label">Emp. Name</label>
				                        <div class="col-md-8">
				                            <select class="custom-select" id="employees_id" name="employees_id">
				                                <option selected>Select Employee</option>
				                                @foreach($emp as $row)
				                                <option value="{{$row->id}}">{{$row->name}}</option>
				                                @endforeach
				                              </select>
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Month</label>
				                        <div class="col-md-8">
					                        <select class="custom-select" id="month" name="month">
					                            <option selected>Choose Month</option>
					                            <option value="January">January</option>
					                            <option value="February">February</option>
					                            <option value="March">March</option>
					                            <option value="April">April</option>
					                            <option value="May">May</option>
					                            <option value="June">June</option>
					                            <option value="July">July</option>
					                            <option value="August">August</option>
					                            <option value="September">September</option>
					                            <option value="October">October</option>
					                            <option value="November">November</option>
					                            <option value="December">December</option>
					                        </select>
				                        </div> 
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Year</label>
				                        <div class="col-md-8">
				                            <input type="number" class="form-control" id="year" name="year" placeholder="Enter Year" value="" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Advanced Salary</label>
				                        <div class="col-md-8">
				                            <input type="number" class="form-control" name="advanced_salary" placeholder="Advanced Salary" value="" maxlength="50" required="">
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