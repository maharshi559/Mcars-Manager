@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/addbooking.css') }}" >
	<div id="add-car" class="col-md-12">
			<h2>ADD NEW RESERVATION</h2>
	</div>

<form>
<div class="col-md-12" id="addcar-container">


		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="From">From</label>
						<input type="date" class="form-control" name="from" placeholder="Ex. 12/12/2012" required>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="FromTime">Time</label>
						<input type="time" class="form-control" name="fromtime" id="fromtime" placeholder="Ex. 03:00pm" required>
					</div>
				</div>
			</div>
			<div class="row">
		  		<div class="col-md-8">
			  	<div class="form-group">
		    		<label for="To">To</label>
		    		<input type="date" class="form-control" name="to" id="to" placeholder="Ex. 12/12/2012" required>
		  		</div>
			</div>
				<div class="col-md-4">
			  	<div class="form-group">
		    		<label for="FromTime">Time</label>
		    		<input type="time" class="form-control" name="totime" id="totime" placeholder="Ex. 03:00pm" required>
		  		</div>
		  	</div>
			</div>
	    </div>



</div>
</form>


<script>

	//document.getElementById("firstweek").innerHTML("<td>"+monthStartDate+"</td>");
</script>

	@endsection









