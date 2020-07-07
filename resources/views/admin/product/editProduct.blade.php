@extends('layouts.adminLayout')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">Edit Product</div>

	                <div class="card-body">

				        <div class="box-content">
				            <form action="{{url('/products/store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
				            	@method('POST')
				                @csrf
				                <fieldset>
				                    <div class="form-group">
				                        <label for="name" class="col-sm-2 control-label">Product Name</label>
				                        <div class="col-md-8">
				                        	<input type="hidden" name="id" value="{{$data->id}}">
				                            <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{$data->name}}" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Product Catagory</label>
					                    <div class="col-md-8">
				                            <select class="custom-select" id="catagory_id"name="catagory_id">
				                                <option selected>Choose Catagory</option>
				                                @foreach($cata as $row)
				                                <option value="{{$row->id}}" <?php if($row->id==$data->catagory->id) echo "selected"; ?>>{{$row->name}}</option>
				                                @endforeach
				                            </select>
					                    </div>
				                	</div>

				                	<div class="form-group">
				                        <label class="col-sm-2 control-label">Product Supplier</label>
					                    <div class="col-md-8">
				                            <select class="custom-select" id="supplier_id"name="supplier_id">
				                                <option selected>Supplier</option>
				                                @foreach($supplier as $row)
				                                <option value="{{$row->id}}" <?php if($row->id==$data->supplier_id) echo "selected"; ?>>{{$row->name}}</option>
				                                @endforeach
				                            </select>
					                    </div>
				                	</div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Product Code</label>
				                        <div class="col-md-8">
				                            <input type="text" class="form-control" id="product_code" name="product_code"  value="{{$data->product_code}}" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Product Garage</label>
				                        <div class="col-md-8">
				                            <select class="custom-select" id="product_garage" name="product_garage">	
				                                <option value="A" <?php if($data->product_garage=='A') echo "selected"; ?>>A</option>
				                                <option value="B" <?php if($data->product_garage=='B') echo "selected"; ?>>B</option>
				                                <option value="C" <?php if($data->product_garage=='C') echo "selected"; ?>>C</option>
				                              </select>
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-2 control-label">Product Route</label>
				                        <div class="col-md-8">
				                            <select class="custom-select" id="product_route" name="product_route">
				                                  <option value="1" <?php if($data->product_route=='1') echo "selected"; ?>>1</option>
				                                  <option value="2" <?php if($data->product_route=='2') echo "selected"; ?>>2</option>
				                                  <option value="3" <?php if($data->product_route=='3') echo "selected"; ?>>3</option>
				                                </select>
				                              </select>
				                        </div1>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-4 control-label">Buy Date</label>
				                        <div class="col-md-8">
				                            <input type="date" class="form-control" id="buy_date" name="buy_date"  value="{{$data->buy_date}}" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-4 control-label">Exp. Data</label>
				                        <div class="col-md-8">
				                            <input type="date" class="form-control" id="exp_date" name="exp_date" value="{{$data->exp_date}}" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-4 control-label">Buying Price</label>
				                        <div class="col-md-8">
				                            <input type="number" class="form-control" id="buying_price" name="buying_price" value="{{$data->buying_price}}" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                        <label class="col-sm-4 control-label">Selling Price</label>
				                        <div class="col-md-8">
				                            <input type="number" class="form-control" id="selling_price" name="selling_price" value="{{$data->selling_price}}" maxlength="50" required="">
				                        </div>
				                    </div>

				                    <div class="form-group">
				                    	
				                        <label class="col-sm-4 control-label">Product Photo</label>
				                        <div class="col-md-8">
				                        	<input type="hidden" name="oldphoto" value="{{$data->product_image}}">
				                            <input type="file" class="form-control" name="product_image" >
				                            <img src="{{asset($data->product_image)}}" height="50" width="50">
				                        </div>
				                    </div>

				                    <div class="form-actions">
				                        <button type="submit" value="submit" class="btn btn-primary">Update</button>
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