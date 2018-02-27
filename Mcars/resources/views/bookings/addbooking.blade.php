@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/addbooking.css') }}" >
	<div id="add-car">
			<h2>ADD NEW RESERVATION</h2>
	</div>


<div class="container col-md-12" id="addcar-container">


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

<form class="col-md-12">


  <div class="tab-content">
  	
	    <div id="home" class="tab-pane fade in active">
	      <div class="row">
	      	
			<div class="col-md-4">
				<div class="form-group">
					<label for="From">From</label>
					<input type="date" class="form-control" name="from" name="From" placeholder="Ex. 12/12/2012" required>
				</div>
			</div>
			<div class="col-md-2">
			  	<div class="form-group">
		    		<label for="FromTime">Time</label>
		    		<input type="time" class="form-control" name="fromtime" id="fromtime" placeholder="Ex. 03:00pm" required>
		  		</div>
		  	</div>
		  	<div class="col-md-4">
			  	<div class="form-group">
		    		<label for="To">To</label>
		    		<input type="date" class="form-control" name="to" id="to" placeholder="Ex. 12/12/2012" required>
		  		</div>
			</div>
			<div class="col-md-2">
			  	<div class="form-group">
		    		<label for="FromTime">Time</label>
		    		<input type="time" class="form-control" name="totime" id="totime" placeholder="Ex. 03:00pm" required>
		  		</div>
		  	</div>
		
		</div>
					  	
	    </div>
	    <div id="menu1" class="tab-pane fade">
	      	<div class="row">
		      	<div class="media panel">
					<div class="media-left">
				    	<a href="#">
				      		<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
				    	</a>
				  	</div>
				  	<div class="media-body">
				  		<div class="col-md-3">
					    	<h4 class="media-heading">Srinivas Reddy</h4>
					    	<p>Since May, 2016</p>
				    	</div>
				    	<div class="col-md-3">
					    	<h5 class="media-heading">Active</h5>
					    	<!-- <p>Since May, 2016</p> -->
				    	</div>
				    	<div class="col-md-3">
					    	<h5 class="media-heading">+91-9440567876</h5>
					    	<!-- <p>Since May, 2016</p> -->
				    	</div>
				    	<div class="col-md-3">
					    		<h5 class="media-heading pull-right">
					    			<i class="fas fa-angle-right"></i>
					    		</h5>
					    	<a href="{{ route('vendors.show', ['id'=>Auth::user()->id]) }}">
					    		<p>More Details	</p>
					    	</a>
				    	</div>
					</div>
				</div>
			</div>
	    </div>
	    <div id="menu2" class="tab-pane fade">
	      <h3>Menu 2</h3>
	      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	    </div>
	    <div id="menu3" class="tab-pane fade">
	      <h3>Menu 3</h3>
	      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	    </div>
   
  </div>

	</form> 
	
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


	@endsection