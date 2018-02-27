@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/addcar.css') }}" >
	<div id="add-car">
			<h2>ADD NEW CAR</h2>
	</div>

<div class="container col-md-12" id="addcar-container">
	<div class="col-md-12">
		<form method="POST" action="{{route("cars.store")}}" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
		  				<div class="form-group">
		    				<label for="brand"> Brand</label>
			    			<select class="form-control" name="brand">
			    				<option value="Honda">Honda</option>
						    	<option  value="Hyundai">Hyundai</option>
						    	<option  value="Tata">Tata</option>
						    	<option value="Maruthi">Maruthi</option>
						    	<option value="Bmw">BMW</option>
						    	<option value="Mahindra">Mahindra</option>
			    			</select>
		    			</div>
		  			</div>
		  			<div class="col-md-6">
		  				<div class="form-group">
		    				<label for="carname">Car Name</label>
		    				<input type="text" name="carname" class="form-control" id="exampleInputPassword1" placeholder="Ex. Eon/ i-20">
		  				</div>
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-12">
		  				<div class="form-group">
		    				<label for="pollutionexp">Car Number</label>
		    				<input name="carnumber" class="form-control" type="text" placeholder="TS 09 AB 1234"></input><span class="add-on" />
		  				</div>
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-4">
			  			<div class="form-group">
			    			<label for="model">Model</label>
			    			<input type="text" name="model" class="form-control" id="exampleInputPassword1" placeholder="Ex. VDi/Zdi">
			  			</div>
		  			</div>
			  		<div class="col-md-4">
				  		<div class="form-group">
				    		<label for="year">Year</label>
				    		<input type="text" name="year" class="form-control" id="exampleInputEmail1" placeholder="Ex. 2009/2018" required>
				  		</div>
			  		</div>
			  		<div class="col-md-4">
				   		<div class="form-group">
				    		<label for="color">color</label>
				    		<input type="text" name="color" class="form-control" id="exampleInputPassword1" placeholder="Ex. Red/ Blue">
				  		</div>
			  		</div>
		  		</div>

		  		<div class="row">
		  			<div class="col-md-6">
		  				<div class="form-group">
		    				<label for="fueltype">Fuel Type</label>
		    				<select class="form-control" name="fueltype">
								<option value="Petrol">Petrol</option>
								<option value="Diesel">Diesel</option>
							</select>
		  				</div>
		  			</div>
		  			<div class="col-md-6">
		  				<div class="form-group">
		    				<label for="seatcap">Seating Capacity</label>
		    				<select class="form-control" name="seatcap">
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
		    				<label for="enginenumber">Engine Number</label>
		    				<input type="text" name="enginenumber" class="form-control" id="exampleInputEmail1" placeholder="Ex. H238HDK93847588" required>
		  				</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
			    			<label for="chasisnumber">Chasis Number</label>
			    			<input type="text" name="chasisnumber" class="form-control" id="exampleInputEmail1" placeholder="Ex. MA3EKE41SOO123456-D9" required>
			  			</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						 	<div class="row">
							    <div class="col-md-4">
				    				<label for="insstart">Insurance Start</label>   
				    				<input name="insstart" data-format="dd/MM/yyyy" class="form-control" type="text" placeholder="01/01/1985"></input><span class="add-on" />
				    			</div>
				    			<div class="col-md-4">
				    				<label for="inssend">Insurance End</label>   
				    				<input name="inssend" data-format="dd/MM/yyyy" class="form-control" type="text" placeholder="01/01/1985"></input><span class="add-on" />
				    			</div>
				    			<div class="col-md-4">
		    						<label for="pollutionexp">Pollution Expiry</label>
		    						<input data-format="dd/MM/yyyy" name="pollutionexp" class="form-control" type="text" placeholder="01/01/1985"></input><span class="add-on" />
		  						</div>
				    		</div>
				  		</div>
		  			</div>
		  			
				</div>
			</div>
		  	<div class="col-md-6">
		  		<div class="form-group">
		    		<label for="vendor">Vendor Table </label>
		    		<select class="form-control" name="vendorname">
		    			<option value="1">1</option>
		    			<option value="2">1</option>
		    			<option value="3">1</option>
		    			<option value="4">1</option>
		    		</select>
		  		</div>
				<div class="row">
				    <p class="help-block text-center">Edit the image to square before uploading.</p>
					<div class="col-md-8 col-md-offset-3">
						<div class="form-group">
				  			<img src="{{ asset('images/default-car.png') }}" alt="default image" width="200px" class="img-thumbnail">
				  		</div>
				   		<div class="form-group" id="file-upload">
				    		<!-- <label></label>bel for="exampleInputFile">Car Image</label> -->
				    		<button type="file" id="car-btn" accept="image/*" class="btn btn-default">Change</button>
				    		<input type="file" name="carimage" id="car-image" accept="image/*" >
				  		</div>
					</div>
				</div> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group">
					    		<label for="custprice">Customer Price/day </label>
					    		<input size="10" name="custprice" class="form-control" type="number" placeholder="2500"></input><span class="add-on" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
					    		<label for="vendprice">Vendor Price/day</label>
					    		<input class="form-control" name="vendprice" type="number" placeholder="1500"></input><span class="add-on" />
							</div>
						</div>
					</div>
				</div> 
		  
		  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		  <script type="text/javascript">
		  	$(function(){

    			$('#car-image').change( function(e) {
        
        			var img = URL.createObjectURL(e.target.files[0]);
        			$('.img-thumbnail').attr('src', img);
    			});


			});

		  </script>

		  	<div class="row pull-right">
		  		<div class="col-md-12">
		  		<button type="reset"  class="btn btn-default">Reset</button>
		  		<button type="submit" class="btn btn-success">Submit</button>
		  		</div>
			</div>
		  </div>
			</form>
		</div>
	</div>


	@endsection
