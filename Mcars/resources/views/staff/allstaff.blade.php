@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/addvendor.css') }}" >
	<div id="add-car">
			<h2>LIST OF STAFF MEMBERS</h2>
	</div>


<div class="container col-md-12" id="addcar-container">

       @foreach($staff as $astaff)
		<div class="media panel">
			<div class="media-left">
		    	<a href="#">
		      		<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
		    	</a>
		  	</div>
		  	<div class="media-body">
		  		<div class="col-md-4">
		    		<h4 class="media-heading">{{$astaff->firstname}} {{$astaff->lastname}}</h4>
		    		<p>{{$astaff->email}}	</p>
		    	</div>
		    	<div class="col-md-4">
		    		<h5 class="media-heading">{{$astaff->firstname}}</h4>
		    	</div>

		    	<div class="col-md-4">
		    		<h5 class="media-heading">Driving</h4>
		    	</div>
		  	</div>
		</div>
      @endforeach


</div>

	@endsection