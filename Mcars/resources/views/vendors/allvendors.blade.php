@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/allvendors.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/scrollstyle.css') }}" >



	<div id="allcars">
			<h2>LIST OF VENDORS</h2>
	</div>


<div class="container col-md-12" id="allvendors-container">

       @foreach($vendors as $vendor)
		<div class="media panel">
			<div class="media-left">
		    	<a href="#">
		      		<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
		    	</a>
		  	</div>
		  	<div class="media-body">
		  		<div class="col-md-3">
			    	<h4 class="media-heading">{{$vendor->firstname}} {{$vendor->lastname}}</h4>
			    	<p>Since May, 2016</p>
		    	</div>
		    	<div class="col-md-3">
			    	<h5 class="media-heading">{{$vendor->status}}</h5>
			    	<!-- <p>Since May, 2016</p> -->
		    	</div>
		    	<div class="col-md-3">
			    	<h5 class="media-heading">{{$vendor->phonenumber}}</h5>
			    	<!-- <p>Since May, 2016</p> -->
		    	</div>
		    	<div class="col-md-3">
			    		<h5 class="media-heading pull-right">
			    			<i class="fas fa-angle-right"></i>
			    		</h5>
			    	<a href="{{ route('vendors.show', ['id'=>$vendor->id]) }}">
			    		<p>More Details	</p>
			    	</a>
		    	</div>
		  	</div>
		</div>
       @endforeach


</div>

	@endsection