@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/allcustomers.css') }}" >
	<div id="add-car">
			<h2>LIST OF CUSTOMERS</h2>
	</div>


<div class="container col-md-12" id="addcar-container">


	@foreach($customers as $customer)
		<div class="media panel">
			<div class="media-left">
				<a href="#">
					<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
				</a>
			</div>
			<div class="media-body">
				<div class="col-md-3">
					<h4 class="media-heading">{{$customer->firstname}} {{$customer->lastname}}</h4>
					<p>Since May, 2016</p>
				</div>
				<div class="col-md-3">
					{{--<h5 class="media-heading">{{$customer->status}}</h5>--}}
					<!-- <p>Since May, 2016</p> -->
				</div>
				<div class="col-md-3">
					<h5 class="media-heading">{{$customer->phonenumber}}</h5>
					<!-- <p>Since May, 2016</p> -->
				</div>
				<div class="col-md-3">
					<h5 class="media-heading pull-right">
						<i class="fas fa-angle-right"></i>
					</h5>
					<a href="{{ route('customers.show', ['id'=>$customer->id]) }}">
						<p>More Details	</p>
					</a>
				</div>
			</div>
		</div>
	@endforeach

		

</div>

	@endsection