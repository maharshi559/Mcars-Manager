@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/addvendor.css') }}" >
	<div id="add-car">
			<h2>ADD NEW STAFF MEMBER</h2>
	</div>


<div class="container col-md-12" id="addcar-container">

		<div class="col-md-12">
			<form>
				<div class="col-md-12">
					<div class="col-md-6">
				  		<div class="form-group">
				    		<label for="exampleInputEmail1">Name</label>
				    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex. Ram/Tarun" required>
				  		</div>
					  	<div class="row">
					  		<div class="col-md-6">
							  	<div class="form-group">
								    <label for="exampleInputPassword1">Phone Number</label>
								    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ex. 9440981234">
								</div>
							</div>
							<div class="col-md-6">
							  	<div class="form-group">
							    	<label for="exampleInputPassword1">Alternate Phone Number</label>
							    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ex. 9440981234">
							  	</div>
						  	</div>
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputEmail1">Address</label>
					    	<textarea class="form-control" rows="3"></textarea>
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputPassword1">E-mail</label>
					    	<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Ex. sample@vendor.com">
					  	</div>
					  	<div class="row">
					  		<div class="col-md-6">
							  	<div class="form-group">
								    <label for="exampleInputPassword1">Salary</label>
								    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Ex. 9440">
								</div>
							</div>
							<div class="col-md-6">
							  	<div class="form-group">
							    	<label for="exampleInputPassword1">Type</label>
							    	<select class="form-control">
							    		<option>Driving</option>
							    		<option>Non-Driving</option>
							    	</select>
							  	</div>
						  	</div>
					  	</div>
					  	<div class="form-group">
					  		<label for="exampleInputEmail1">Date of Joining</label>
					        <input data-format="dd/MM/yyyy" class="form-control" type="text" placeholder="01/01/1985"></input><span class="add-on" />
						</div>
					</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			    			<label for="exampleInputFile">Aadhar Copy</label>
			    			<input type="file" class="btn btn-default" id="exampleInputFile">
			  			</div>

			  			<div class="custom-file-upload">
    						<span id="filename">Select your file</span>
						    <label for="file-upload">Browse<input type="file" id="file-upload"></label>
						</div>

			  			<div class="form-group">
			    			<label for="exampleInputFile">Pan Card copy</label>
			    			<input type="file" class="btn btn-default" id="exampleInputFile">
			  			</div>
			  			<div class="form-group">
						    <label for="exampleInputFile">Driving License copy</label>
						    <input type="file" class="btn btn-default" id="exampleInputFile">
						</div>

						<div class="file-upload">
							<label for="exampleInputFile">Driving License copy</label>
						  <div class="file-select">
						    <div class="file-select-button" id="fileName">Choose File</div>
						    <div class="file-select-name" id="noFile">No file chosen...</div> 
						    <input type="file" name="chooseFile" id="chooseFile">
						  </div>
						</div>

			  		</div>
		  		</div>
			  	<div class="row pull-right">
			  		<div class="col-md-12">
			  		<button type="reset"  class="btn btn-default">Reset</button>
			  		<button type="submit" class="btn btn-success">Submit</button>
			  		</div>
				</div>
			</form>
		</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript">
	$('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});

</script>

	@endsection