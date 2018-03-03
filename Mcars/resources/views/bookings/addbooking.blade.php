@extends('layouts.app')

@section('content')



	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/addvendor.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('css/addbooking.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('css/allcars.css') }}" >

	<form method="POST" action="search" enctype="multipart/form-data">
		{{csrf_field()}}
	<div class="container-fluid" id="booking-container">
		<div class="col-md-12">
			<h1>CREATE A NEW BOOKING</h1>
		</div>
		<div class='col-md-5'>
			<div class="form-group">
				<div class='input-group date' id='datetimepicker6'>
					<input type='text' name="from" class="form-control" placeholder="From" />
					<span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
				</div>
			</div>
		</div>
		<div class='col-md-5'>
			<div class="form-group">
				<div class='input-group date' id='datetimepicker7'>
					<input type='text' name="to" class="form-control" placeholder="To" />
					<span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
				</div>
			</div>
		</div>
		<div class='col-md-2'>
			<div class="form-group">
				<button type="submit" class="btn btn-default" id="search">Search</button>
			</div>
		</div>
	</div>
	</form>

	@if(!empty($cars))
	<div id="allcars">
		<h2>
			AVAILABLE CARS
			<span class="pull-right"><i class="fas fa-sliders-h"></i></span>
		</h2>
	</div>

	<div class="container-fluid" id="allcars-container">
		@foreach($cars as $car)

				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<h5 class="text-center">{{$car->brand}} {{$car->carname}}</h5>
							<img src="{{ asset('images/cars/thumbnails/'. $car->carimage ) }}" width="100%">

						</div>
						<div class="panel-footer">
							<p>
								{{$car->carnumber}}
							<form method="POST" action="addcustomer" enctype="multipart/form-data">
								{{csrf_field()}}
								<button type="submit" class="btn btn-default btn-sm pull-right">Book</button>
							</form>
							</p>

						</div>
					</div>
				</div>

		@endforeach
	</div>


	@endif



	{{--date picker scripts--}}

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


	{{--END of date picker scripts--}}




	<script type="text/javascript">
		$(document).ready(function() {
			$(function () {


				$('#datetimepicker6').datetimepicker({
					format: "DD/MM/YYYY, HH:mm:ss"
				});
				$('#datetimepicker7').datetimepicker({
					useCurrent: false,
					format: "DD/MM/YYYY, HH:mm:ss"//Important! See issue #1075
				});
				$("#datetimepicker6").on("dp.change", function (e) {
					$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
				});
				$("#datetimepicker7").on("dp.change", function (e) {
					$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
				});
			});
		});
	</script>




@endsection









