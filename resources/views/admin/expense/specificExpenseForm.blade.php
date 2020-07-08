@extends('layouts.adminLayout')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">Select Date/Month/Year <span style="float: right;">Today--{{date("D F Y")}}</span></div>

	                <div class="card-body">

				        <div class="box-content">
				            <form action="{{url('/expense/viewExpense')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
				            	@method('POST')
				                @csrf
				                <fieldset>
				                	<div class="row">
				                		<div class="col">
				                			<label  class="col-sm-6 control-label">Expense Date</label>
				                			<div class="col-md-12">
				                			    <input type="text" name="date" class="form-control">
				                			</div>
				                		</div>
				                		<div class="col">
				                			<label  class="col-sm-6 control-label">Expense Month</label>
				                			<select class="custom-select" id="month" name="month">
				                			    <option selected>Select Month</option>
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
				                		<div class="col">
				                			<label  class="col-sm-6 control-label">Expense Year</label>
				                			<select class="custom-select" id="year" name="year">
				                			    <option selected>Select Year</option>
				                			    <option value="2020">2020</option>
					                            <option value="2021">2021</option>
					                            <option value="2022">2022</option>
					                            <option value="2023">2023</option>
					                            <option value="2024">2024</option>
					                            
				                			  </select>
				                		</div>
				                	</div>
				                	
				       				  <br>                 
				                    <div class="form-actions">
				                        <button type="submit" value="submit" style="float: right;" class="btn btn-primary">Submit</button>
				                        
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