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
			    	<img src="{{ asset('images/cars/'. $car->carimage ) }}" width="100%">
			   
			  	</div>
	  			<div class="panel-footer">
	  				<p>
	  					{{$car->carnumber}}
	  					<span class="pull-right"><i class="fas fa-heart"></i></span>
	  				</p>
	  			</div>
			</div>
		</div>
	</a>
	@endforeach
	


	@endsection
