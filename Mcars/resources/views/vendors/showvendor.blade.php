@extends('layouts.app')

@section('content')
				<link rel="stylesheet" type="text/css" href="{{ asset('css/showvendor.css') }}" >
				<link rel="stylesheet" type="text/css" href="{{ asset('css/scrollstyle.css') }}" >
<div class="container col-md-12">

	<div class="row  pull-right" id="vendor-operations">
		<div class="col-md-12">
			<button class="btn btn-warning btn-sm">Edit</button>
			<button class="btn btn-info btn-sm">Disable</button>
			<button class="btn btn-primary  btn-sm disabled">Add Documents</button>
		</div>
	</div>

    <div class="row">
        <div class="col-md-12" id="vendor-profile">
            <div class="media panel">
			<div class="media-left">
		    	<a href="#">

					<div id="placeholder">
						<h1>{{substr($vendor->firstname, 0,1)}}{{substr($vendor->lastname, 0,1)}}</h1>
					</div>
				</a>
		  	</div>
		  	<div class="media-body media-middle">
		  		<div class="row">
			  		<div class="col-md-8">
				    	<h2 class="media-heading">{{$vendor->firstname}} {{$vendor->lastname}} </h2>
				    	
			    	</div>
			    	
		    	</div>
		    	<div class="row" id="vendor-info">

			    	<div class="col-md-3">
				    	<h5 class="media-heading"><span id="active"><i class="fas fa-child"></i></span> Active</h5>
				    	<!-- <p>Since May, 2016</p> -->
			    	</div>
					<div class="col-md-3">
						<h5 class="media-heading"><span id="email"><i class="fas fa-envelope"></i></span> {{$vendor->email}}</h5>
						<!-- <p>Since May, 2016</p> -->
					</div>
			    	<div class="col-md-3">
				    	<h5 class="media-heading"><span id="phone"><i class="fas fa-phone"></i></span> {{$vendor->phonenumber}}</h5>
				    	<!-- <p>Since May, 2016</p> -->
			    	</div>
			    	<div class="col-md-3">
				    	
				    	<h5 class="media-heading"><span id="vendorID"><i class="fas fa-id-badge"></i></span> {{$vendor->id}}</h5>
			    	</div>
		    	</div>
		  	</div>
	</div>



	<div class="row" id="vendor-operations">
		<div class="col-md-3">
			<ul class="list-group">
					<li class="list-group-item list-group-item-info">
				    	
				    	<strong>Vendor Statistics</strong>
				    	<span class="pull-right"><i class="fas fa-chart-line "></i></span>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">14</span>
				    Total Cars Provided
				  </li>
				  <li class="list-group-item">
				    <span class="badge">8</span>
				    Total Cars Available
				  </li>
				  <li class="list-group-item">
				    <span class="badge">8</span>
				    Total Number of bookings
				  </li>
				  <li class="list-group-item">
				    <span class="pull-right"><i class="fas fa-rupee-sign"></i> 1,30,000</span>
				    Total Commission to Vendor 
				  </li>
				  <li class="list-group-item">
				    <span class="pull-right"><i class="fas fa-rupee-sign"></i> 2,00,000</span>
				    Total income from Vendor's Cars
				  </li>
			</ul>

			<ul class="list-group">
					<li class="list-group-item list-group-item-info">
				    	<strong>Vendor Documents </strong>
				    	<span class="pull-right"><i class="fas fa-folder"></i></span>
				  </li>
				  <li class="list-group-item">
				    Bank Passbook Copy
				    <span class="pull-right">
				    	<i class="fas fa-check-circle"></i>
				    </span>
				  </li>
				  <li class="list-group-item">
				    Aadhaar Card
				    <span class="pull-right">
				    	<i class="fas fa-check-circle"></i>
				    </span>
				  </li>
				  <li class="list-group-item">
				    Cars RC's (merged)
				    <span class="pull-right">
				    	<i class="fas fa-check-circle"></i>
				    </span>
				  </li>
				  <li class="list-group-item">
				    Cars pollution (merged)
				    <span class="pull-right">
				    	<i class="fas fa-check-circle"></i>
				    </span>
				  </li>
				  <li class="list-group-item">
				    Insurance Copies (merged)
				    <span class="pull-right">
				    	<i class="fas fa-check-circle"></i>
				    </span>
				  </li>
			</ul>

		</div>
		<div class="col-md-9">
			<div id="allcars">
					<h2>VENDOR'S ACTIVITY</h2>
			</div>
			<div class="container col-md-12" id="allvendors-container">
				<div class="media panel">
					<div class="media-left">
			    		<a href="#">
			      			<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
			    		</a>
			  		</div>
				  	<div class="media-body">
				  		<div class="col-md-9">
					    	<h4 class="media-heading">Ravi (Vendor X)</h4>
					    	<p>Needed to repair one of the cars radio, Send over</p>
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

				<div class="media panel">
					<div class="media-left">
			    		<a href="#">
			      			<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
			    		</a>
			  		</div>
				  	<div class="media-body">
				  		<div class="col-md-9">
					    	<h4 class="media-heading">Gopikanth (Staff Member-3)</h4>
					    	<p>Updated Srinivas's Dealership Details. Please check profile.</p>
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

				<div class="media panel">
					<div class="media-left">
			    		<a href="#">
			      			<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
			    		</a>
			  		</div>
				  	<div class="media-body">
				  		<div class="col-md-9">
					    	<h4 class="media-heading">Srinivas (Vendor Y)</h4>
					    	<p>Requested Car Trip Details. Gopikath Responded.</p>
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

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-12">
							<h4 class="media-heading">Hyundai Sonata</h4>
							<div class="col-md-3">
								Active
							</div>
							<div class="col-md-3">
								2 trips
							</div>
							<div class="col-md-3">
								<i class="fas fa-rupee-sign"></i> 22,456 /this Mo.
							</div>
							<div class="col-md-3">
								13 Days Rented
							</div>
						</div>

					<!-- <div class="col-md-3">
					    		<h5 class="media-heading pull-right">
					    			<i class="fas fa-angle-right"></i>
					    		</h5>
					    	<a href="{{ route('vendors.show', ['id'=>Auth::user()->id]) }}">
					    		<p>More Details	</p>
					    	</a>
				    	</div> -->
					</div>
				</div>

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-9">
							<h4 class="media-heading">Gopikanth (Staff Member-3)</h4>
							<p>Updated Srinivas's Dealership Details. Please check profile.</p>
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

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-9">
							<h4 class="media-heading">Srinivas (Vendor Y)</h4>
							<p>Requested Car Trip Details. Gopikath Responded.</p>
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

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-12">
							<h4 class="media-heading">Hyundai Sonata</h4>
							<div class="col-md-3">
								Active
							</div>
							<div class="col-md-3">
								2 trips
							</div>
							<div class="col-md-3">
								<i class="fas fa-rupee-sign"></i> 22,456 /this Mo.
							</div>
							<div class="col-md-3">
								13 Days Rented
							</div>
						</div>

					<!-- <div class="col-md-3">
					    		<h5 class="media-heading pull-right">
					    			<i class="fas fa-angle-right"></i>
					    		</h5>
					    	<a href="{{ route('vendors.show', ['id'=>Auth::user()->id]) }}">
					    		<p>More Details	</p>
					    	</a>
				    	</div> -->
					</div>
				</div>

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-9">
							<h4 class="media-heading">Gopikanth (Staff Member-3)</h4>
							<p>Updated Srinivas's Dealership Details. Please check profile.</p>
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

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-9">
							<h4 class="media-heading">Srinivas (Vendor Y)</h4>
							<p>Requested Car Trip Details. Gopikath Responded.</p>
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
	</div>

	<div class="row">
		<div class="col-md-3">
			<ul class="list-group">
					<li class="list-group-item list-group-item-info">
				    	
				    	<strong>This Month</strong>
				    	<span class="pull-right"><i class="fas fa-chart-line "></i></span>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">14</span>
				    Total Cars Provided
				  </li>
				  <li class="list-group-item">
				    <span class="badge">8</span>
				    Total Cars Available
				  </li>
				  <li class="list-group-item">
				    <span class="badge">8</span>
				    Total Number of bookings
				  </li>
				  <li class="list-group-item">
				    <span class="pull-right"><i class="fas fa-rupee-sign"></i> 1,30,000</span>
				    Total Commission to Vendor 
				  </li>
				  <li class="list-group-item">
				    <span class="pull-right"><i class="fas fa-rupee-sign"></i> 2,00,000</span>
				    Total income from Vendor's Cars
				  </li>
			</ul>

			<ul class="list-group">
					<li class="list-group-item list-group-item-info">
				    	<strong>Rentals Overview </strong>
				    	<span class="pull-right"><i class="fas fa-folder"></i></span>
				  </li>
				  <li class="list-group-item">
				    Total income
				    <span class="pull-right">
				    	<i class="fas fa-rupee-sign"></i> 30,000
				    </span>
				  </li>
				  <li class="list-group-item">
				    Total Commission
				    <span class="pull-right">
				    	<i class="fas fa-rupee-sign"></i> 10,000
				    </span>
				  </li>
				  <li class="list-group-item">
				  	Average Rentals/day
				    <span class="pull-right">
				    	<i class="fas fa-caret-up"></i> 3
				    </span>
				  </li>
				  <li class="list-group-item">
				  	Average Income/day
				    <span class="pull-right">
				    	<i class="fas fa-caret-down"></i> <i class="fas fa-rupee-sign"></i> 3250
				    </span>
				  </li>
				  
			</ul>

				{{--<p>Delete this Vendor? <span class="delete"><a type="submit" href="{{ route('vendors.destroy',$vendor->id)}}">Click here</a></span></p>--}}




			<form action="{{ route('vendors.destroy', [$vendor->id])}}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" class="btn btn-danger" value="Delete"/>
			</form>

					</div>



		<div class="col-md-9">
			<div id="allcars">
					<h2>VENDOR'S CAR LISTINGS</h2>
			</div>
			<div class="container col-md-12" id="allvendors-container">
				<div class="media panel">
					<div class="media-left">
			    		<a href="#">
			      			<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
			    		</a>
			  		</div>
				  	<div class="media-body">
				  		<div class="col-md-12">
					    	<h4 class="media-heading">Hyundai Sonata</h4>
					    	<div class="col-md-3">
					    		Active
					    	</div>
					    	<div class="col-md-3">
					    		2 trips
					    	</div>
					    	<div class="col-md-3">
					    		<i class="fas fa-rupee-sign"></i> 22,456 /this Mo. 
					    	</div>
					    	<div class="col-md-3">
					    		13 Days Rented
					    	</div>
				    	</div>
				    	
				    	<!-- <div class="col-md-3">
					    		<h5 class="media-heading pull-right">
					    			<i class="fas fa-angle-right"></i>
					    		</h5>
					    	<a href="{{ route('vendors.show', ['id'=>Auth::user()->id]) }}">
					    		<p>More Details	</p>
					    	</a>
				    	</div> -->
				  	</div>
				</div>

				<div class="media panel">
					<div class="media-left">
			    		<a href="#">
			      			<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
			    		</a>
			  		</div>
				  	<div class="media-body">
				  		<div class="col-md-9">
					    	<h4 class="media-heading">Gopikanth (Staff Member-3)</h4>
					    	<p>Updated Srinivas's Dealership Details. Please check profile.</p>
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

				<div class="media panel">
					<div class="media-left">
			    		<a href="#">
			      			<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
			    		</a>
			  		</div>
				  	<div class="media-body">
				  		<div class="col-md-9">
					    	<h4 class="media-heading">Srinivas (Vendor Y)</h4>
					    	<p>Requested Car Trip Details. Gopikath Responded.</p>
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

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-12">
							<h4 class="media-heading">Hyundai Sonata</h4>
							<div class="col-md-3">
								Active
							</div>
							<div class="col-md-3">
								2 trips
							</div>
							<div class="col-md-3">
								<i class="fas fa-rupee-sign"></i> 22,456 /this Mo.
							</div>
							<div class="col-md-3">
								13 Days Rented
							</div>
						</div>

					<!-- <div class="col-md-3">
					    		<h5 class="media-heading pull-right">
					    			<i class="fas fa-angle-right"></i>
					    		</h5>
					    	<a href="{{ route('vendors.show', ['id'=>Auth::user()->id]) }}">
					    		<p>More Details	</p>
					    	</a>
				    	</div> -->
					</div>
				</div>

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-9">
							<h4 class="media-heading">Gopikanth (Staff Member-3)</h4>
							<p>Updated Srinivas's Dealership Details. Please check profile.</p>
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

				<div class="media panel">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="{{ asset('images/default-car.png') }}" alt="..." width="50px">
						</a>
					</div>
					<div class="media-body">
						<div class="col-md-9">
							<h4 class="media-heading">Srinivas (Vendor Y)</h4>
							<p>Requested Car Trip Details. Gopikath Responded.</p>
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
	</div>
</div>

@endsection
