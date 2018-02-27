@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/addvendor.css') }}" >
	<div id="add-car">
			<h2>LIST OF STAFF MEMBERS</h2>
	</div>


<div class="container col-md-12" id="addcar-container">


		<div class="media panel">
			<div class="media-left">
		    	<a href="#">
		      		<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
		    	</a>
		  	</div>
		  	<div class="media-body">
		  		<div class="col-md-4">
		    		<h4 class="media-heading">Media heading</h4>
		    		<p>lorem ipsum	</p>
		    	</div>
		    	<div class="col-md-4">
		    		<h5 class="media-heading">Active</h4>
		    	</div>

		    	<div class="col-md-4">
		    		<h5 class="media-heading">Driving</h4>
		    	</div>
		  	</div>
		</div>


		<div class="media panel">
			<div class="media-left">
		    	<a href="#">
		      		<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
		    	</a>
		  	</div>
		  	<div class="media-body">
		  		<div class="col-md-4">
		    		<h4 class="media-heading">Mahesh Naik</h4>
		    		<p>+91-8143381933</p>
		    	</div>
		    	<div class="col-md-4">
		    		<h5 class="media-heading">In-Active</h4>
		    	</div>

		    	<div class="col-md-4">
		    		<h5 class="media-heading">Driving</h4>
		    	</div>
		  	</div>
		</div>


		<div class="media panel">
			<div class="media-left">
		    	<a href="#">
		      		<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
		    	</a>
		  	</div>
		  	<div class="media-body">
		  		<div class="col-md-4">
		    		<h4 class="media-heading">Media heading</h4>
		    		<p>lorem ipsum	</p>
		    	</div>
		    	<div class="col-md-4">
		    		<h5 class="media-heading">Active</h4>
		    	</div>

		    	<div class="col-md-4">
		    		<h5 class="media-heading">Non-Driving</h4>
		    	</div>
		  	</div>
		</div>

</div>

	@endsection