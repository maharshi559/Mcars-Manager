@extends('layouts.app')

@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/addvendor.css') }}" >
	<div id="add-car">
		<h2>ADD NEW VENDOR</h2>
	</div>


	<div class=" col-md-12" id="addcar-container">

		<div class="col-md-12">
			<form method="POST" action="{{route("vendors.store")}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="col-md-6">
					<div class="row">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ram/Tarun" required>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="phonenumber">Phone Number</label>
									<input type="text" name="phonenumber" class="form-control" id="exampleInputPassword1" placeholder="9440981234">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="altphonenumber">Alternate Phone Number</label>
									<input type="text" name="altphonenumber" class="form-control" id="exampleInputPassword1" placeholder="9440981234">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="sample@vendor.com">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<!-- <textarea class="form-control" rows="3"></textarea> -->
							<input type="text" name="address" class="form-control" placeholder="H.no, street">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="locality" placeholder=" Locality, Area" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="city" placeholder="City" class="form-control">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="state" placeholder="State" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="pincode" placeholder="Pincode" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="file-upload">
						<label for="exampleInputFile">Driving License copy</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noDlCopy">No file chosen...</div>
							<input type="file" name="dlcopy" id="dlCopy">
						</div>
					</div>

					<div class="file-upload">
						<label for="exampleInputFile">Aadhaar Copy</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noAadharCopy">No file chosen...</div>
							<input type="file" name="aadharcopy" id="aadharCopy">
						</div>
					</div>

					<div class="file-upload">
						<label for="exampleInputFile">Pan Card Copy</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noPanCard">No file chosen...</div>
							<input type="file" name="pancardcopy" id="panCard">
						</div>
					</div>

					<div class="file-upload">
						<label for="exampleInputFile">Bank Passbook Copy</label>
						<div class="file-select">
							<div class="file-select-button" id="fileName">Choose File</div>
							<div class="file-select-name" id="noBankCopy">No file chosen...</div>
							<input type="file" name="bankcopy" id="bankCopy">
						</div>
					</div>

				</div>
				<div class="row pull-right">
					<div class="col-md-12">
						<button type="reset"  class="btn btn-default">Reset</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
    </div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

	<script type="text/javascript">
		$('#dlCopy').bind('change', function () {
			var filename = $("#dlCopy").val();
			if (/^\s*$/.test(filename)) {
				$(".file-upload").removeClass('active');
				$("#noDlCopy").text("No file chosen...");
			}
			else {
				//  		$(".file-upload").addClass('active');
				$("#noDlCopy").text(filename.replace("C:\\fakepath\\", ""));
			}
		});

		$('#aadharCopy').bind('change', function () {
			var filename = $("#aadharCopy").val();
			if (/^\s*$/.test(filename)) {
				$(".file-upload").removeClass('active');
				$("#noAadharCopy").text("No file chosen...");
			}
			else {
				//  		$(".file-upload").addClass('active');
				$("#noAadharCopy").text(filename.replace("C:\\fakepath\\", ""));
			}
		});

		$('#panCard').bind('change', function () {
			var filename = $("#panCard").val();
			if (/^\s*$/.test(filename)) {
				$(".file-upload").removeClass('active');
				$("#noPanCard").text("No file chosen...");
			}
			else {
				//  		$(".file-upload").addClass('active');
				$("#noPanCard").text(filename.replace("C:\\fakepath\\", ""));
			}
		});

		$('#bankCopy').bind('change', function () {
			var filename = $("#bankCopy").val();
			if (/^\s*$/.test(filename)) {
				$(".file-upload").removeClass('active');
				$("#noBankCopy").text("No file chosen...");
			}
			else {
				//  		$(".file-upload").addClass('active');
				$("#noBankCopy").text(filename.replace("C:\\fakepath\\", ""));
			}
		});


	</script>

@endsection