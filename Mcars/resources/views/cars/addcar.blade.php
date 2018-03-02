@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/addcar.css') }}" >
	<div id="add-car">
			<h2>ADD NEW CAR</h2>
	</div>

<div class="container col-md-12" id="addcar-container">
	<form method="POST" action="{{route("cars.store")}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
		  				<div class="form-group">
		    				<label for="brand"> Brand</label>
			    			<select class="form-control" name="brand" required>
								<option value="">Select Car's Brand</option>
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
		    				<select class="form-control" name="fueltype" required>
								<option value="">Select Fuel Type</option>
								<option value="Petrol">Petrol</option>
								<option value="Diesel">Diesel</option>
							</select>
		  				</div>
		  			</div>
		  			<div class="col-md-6">
		  				<div class="form-group">
		    				<label for="seatcap">Seating Capacity</label>
		    				<select class="form-control" name="seatcap" required>
								<option value="">Select Seating Capacity</option>
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
				    				<input name="insstart" data-format="dd/MM/yyyy" class="form-control" type="text" placeholder="1985/12/31"  required></input><span class="add-on" />
				    			</div>
				    			<div class="col-md-4">
				    				<label for="inssend">Insurance End</label>   
				    				<input name="inssend" data-format="dd/MM/yyyy" class="form-control" type="text" placeholder="1985/12/03" required></input><span class="add-on" />
				    			</div>
				    			<div class="col-md-4">
		    						<label for="pollutionexp">Pollution Expiry</label>
		    						<input data-format="dd/MM/yyyy" name="pollutionexp" class="form-control" type="text" placeholder="1985/12/31"></input><span class="add-on" />
		  						</div>
				    		</div>
				  		</div>
		  			</div>
				</div>
			</div>

			{{--right part of form--}}
			<div class="col-md-6">
		  		<div class="form-group">
		    		<label for="vendor">Vendor Name </label>
		    		<select class="form-control" name="vendorname" required>
						<option hidden value="">Select Vendor</option>
						@foreach($vendors as $vendor)
		    			<option value="{{$vendor->id}}">{{$vendor->firstname}}  {{$vendor->lastname}} </option>
					    @endforeach
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


		  </div>
		</div>

		{{--car file upload section--}}
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="file-upload">
						<label for="pollutionCopy">Pollution Copy(optional)</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noPollutionCopy">No file chosen...</div>
							<input type="file" name="pollutioncopy" id="pollutionCopy" >
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="file-upload">
						<label for="RC">RC Copy*</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noRcCopy">No file chosen...</div>
							<input type="file" name="rccopy" id="rcCopy" >
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="file-upload">
						<label for="insurance">Insurance Copy(optional)</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noInsuranceCopy">No file chosen...</div>
							<input type="file" name="insuranceCopy" id="insuranceCopy" >
						</div>
					</div>
				</div>
			</div>
		</div>
		{{--end of car file upload section--}}

		{{--car photos upload section--}}
		<div class="col-md-12" id="carimages">
			<div class="row">
				<div class="col-md-3">
					<div class="file-upload">
						<label for="carpic-1">Car Front Image</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noFrontPic">No file chosen...</div>
							<input type="file" name="frontpic" id="frontPic" >
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="file-upload">
						<label for="carpic-2">Driver's Side Image</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noDside">No file chosen...</div>
							<input type="file" name="dsidepic" id="dside" >
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="file-upload">
						<label for="carpic-3">Passenger's Side Image</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noPside">No file chosen...</div>
							<input type="file" name="psidepic" id="pside" >
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="file-upload">
						<label for="carpic-4">Back Side Image</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noBackpic">No file chosen...</div>
							<input type="file" name="backpic" id="backPic" >
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- end of car photos upload section--}}

		{{--form submit section--}}
		<div class="row pull-right">
			<div class="col-md-12">
				<button type="reset"  class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
		{{--end of form submit section--}}

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

		<script type="text/javascript">


			{{--upload image code for car documents--}}

			$('#pollutionCopy').bind('change', function () {
				var filename = $("#pollutionCopy").val();
				if (/^\s*$/.test(filename)) {
					$(".file-upload").removeClass('active');
					$("#noPollutionCopy").text("No file chosen...");
				}
				else {
					//  		$(".file-upload").addClass('active');
					$("#noPollutionCopy").text(filename.replace("C:\\fakepath\\", ""));
				}
			});

			$('#rcCopy').bind('change', function () {
				var filename = $("#rcCopy").val();
				if (/^\s*$/.test(filename)) {
					$(".file-upload").removeClass('active');
					$("#noRcCopy").text("No file chosen...");
				}
				else {
					//  		$(".file-upload").addClass('active');
					$("#noRcCopy").text(filename.replace("C:\\fakepath\\", ""));
				}
			});

			$('#insuranceCopy').bind('change', function () {
				var filename = $("#insuranceCopy").val();
				if (/^\s*$/.test(filename)) {
					$(".file-upload").removeClass('active');
					$("#noInsuranceCopy").text("No file chosen...");
				}
				else {
					//  		$(".file-upload").addClass('active');
					$("#noInsuranceCopy").text(filename.replace("C:\\fakepath\\", ""));
				}
			});

			{{--end of upload image code for car documents--}}

			{{--==========================================================================================--}}

			{{--Car images upload Javascript--}}
			$('#frontPic').bind('change', function () {
				var filename = $("#frontPic").val();
				if (/^\s*$/.test(filename)) {
                        $(".file-upload").removeClass('active');
					$("#noFrontPic").text("No file chosen...");
				}
				else {
					//  		$(".file-upload").addClass('active');
					$("#noFrontPic").text(filename.replace("C:\\fakepath\\", ""));
				}
			});

			$('#dside').bind('change', function () {
				var filename = $("#dside").val();
				if (/^\s*$/.test(filename)) {
                        $(".file-upload").removeClass('active');
					$("#noDside").text("No file chosen...");
				}
				else {
					//  		$(".file-upload").addClass('active');
					$("#noDside").text(filename.replace("C:\\fakepath\\", ""));
				}
			});

			$('#pside').bind('change', function () {
				var filename = $("#pside").val();
				if (/^\s*$/.test(filename)) {
                        $(".file-upload").removeClass('active');
					$("#noPside").text("No file chosen...");
				}
				else {
					//  		$(".file-upload").addClass('active');
					$("#noPside").text(filename.replace("C:\\fakepath\\", ""));
				}
			});

			$('#backPic').bind('change', function () {
				var filename = $("#backPic").val();
				if (/^\s*$/.test(filename)) {
                        $(".file-upload").removeClass('active');
					$("#noBackpic").text("No file chosen...");
				}
				else {
					//  		$(".file-upload").addClass('active');
					$("#noBackpic").text(filename.replace("C:\\fakepath\\", ""));
				}
			});

			{{--end of Car images upload Javascript--}}

		</script>

	</form>
</div>

@endsection
