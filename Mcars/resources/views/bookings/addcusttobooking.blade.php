@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/addvendor.css') }}" >

    <div id="add-car">
        <h2>ADD NEW CUSTOMER</h2>
    </div>


    <div class="col-md-12" id="select-customer">


        <div id="checkbox">
            <input type="checkbox" name="title"><label>Select Existing customer</label>

        </div>
        <form method="POST" action="addstaff" id="existingCustomerForm" enctype="multipart/form-data">

                {{csrf_field()}}
        <div class="form-group" id="hidden">
            {{--<label for="vendor">Select from existing customer</label>--}}
            <select class="form-control" id="existingCustomer" name="vendorname" required>
                <option hidden value="">Select customer</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->firstname}}  {{$customer->lastname}} </option>
                @endforeach
            </select>

            <div class="row pull-right">
                <div class="col-md-12">

                    {{--<button type="submit" class="btn btn-success">Submit</button>--}}
                </div>
            </div>
        </div>
        </form>

    </div>

    <div class=" col-md-12" id="addcar-container">

        <form method="POST" action="" enctype="multipart/form-data">
            <div class="col-md-12">
                {{csrf_field()}}

                <div class="row">
                    <div class='col-md-5'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker6'>
                                <input type='text' name="from" class="form-control"  placeholder="From" />
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


                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="row">

{{--                       <p>     {{$data.firstname}}</p>--}}


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">First Name*</label>
                                    <input type="text" value="{{$data['firstname']}}" name="firstname"  class="form-control" id="exampleInputEmail1" placeholder="Ram/Tarun" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name*</label>
                                    <input type="text" name="lastname" value="{{$data['lastname']}}" class="form-control" id="exampleInputEmail1" placeholder="Ram/Tarun" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phonenumber">Phone Number*</label>
                                    <input type="text" name="phonenumber" class="form-control" value="{{$data['phonenumber']}}" id="exampleInputPassword1" placeholder="9440981234" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="altphonenumber">Alternate Phone Number (optional)</label>
                                    <input type="text" name="altphonenumber"  value="{{$data['altphonenumber']}}"class="form-control" id="exampleInputPassword1" placeholder="9440981234">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email">E-mail*</label>
                                    <input type="email" name="email" value="{{$data['email']}}" class="form-control" id="exampleInputPassword1" placeholder="sample@vendor.com" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Date of Birth*</label>
                                    <input type="text" name="dob"  value="{{$data['dob']}}" class="form-control" id="exampleInputPassword1" placeholder="yyyy/mm/dd" required>
                                </div>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address*</label>
                            <!-- <textarea class="form-control" rows="3"></textarea> -->
                            <input type="text" name="address" class="form-control" value="{{$data['address']}}" placeholder="H.no, street" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="locality" value="{{$data['locality']}}" placeholder=" Locality, Area" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="city"  value="{{$data['city']}}" placeholder="City" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="state"  value="{{$data['state']}}" placeholder="State" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="pincode" value="{{$data['pincode']}}" placeholder="Pincode" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="vendor">Assign Delivering Staff (optional)</label>
                    <select class="form-control" id="deliveryStaff" name="vendorname">
                        <option hidden value="">No selection</option>
                        @foreach($staff as $staf)
                            <option value="{{$staf->id}}">{{$staf->firstname}}  {{$staf->lastname}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="vendor">Assign Pickup Staff (optional)</label>
                    <select class="form-control" id="deliveryStaff" name="vendorname">
                        <option hidden value="">No selection</option>
                        @foreach($staff as $staf)
                            <option value="{{$staf->id}}">{{$staf->firstname}}  {{$staf->lastname}} </option>
                        @endforeach
                    </select>
                </div>

            <div class="row pull-right">
                <div class="col-md-12">
                    <button type="reset"  class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    {{--input files script--}}
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

        $('#additionalDocs').bind('change', function () {
            var filename = $("#additionalDocs").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload").removeClass('active');
                $("#noAdditionalDocs").text("No file chosen...");
            }
            else {
                //  		$(".file-upload").addClass('active');
                $("#noAdditionalDocs").text(filename.replace("C:\\fakepath\\", ""));
            }
        });


    </script>

    {{--toggle function --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[type="checkbox"]').click(function(){
               // var item = $(this).attr('name');
                $('#hidden').toggle();
               // $('#addcar-container').toggle();
            });

            $('#existingCustomer').on('change', function () {
                $('#existingCustomerForm').submit();
            })
        });



    </script>
@endsection