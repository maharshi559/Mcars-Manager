@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/allcars.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/scrollstyle.css') }}" >
	<div id="allcars">
			<h2>
				ALL CARS
				<span class="pull-right"><i class="fas fa-sliders-h"></i></span>
			</h2>
	</div>

<div class="container col-md-12" id="allcars-container">
   @foreach($cars as $car)
	<a href="{{ route('cars.show', ['id'=>$car->id]) }}">
		<div class="col-md-3">
			<div class="panel panel-default">
			  	<div class="panel-body">	
					<h5 class="text-center">{{$car->brand}} {{$car->carname}}</h5>
			    	<img src="{{ asset('images/cars/thumbnails/'. $car->carimage ) }}" width="100%">
			  	</div>
	  			<div class="text-center panel-footer">
	  				<p>
	  					{{$car->carnumber}}
	  				</p>
	  			</div>
			</div>
		</div>
	</a>

	@endforeach
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


	@endsection
