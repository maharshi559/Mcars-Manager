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
        <form method="POST" action="{{route("customers.index")}}" enctype="multipart/form-data">

                {{csrf_field()}}
        <div class="form-group" id="hidden">
            <label for="vendor">Select from existing customer</label>
            <select class="form-control" name="vendorname" required>
                <option hidden value="">Select customer</option>
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->firstname}}  {{$customer->lastname}} </option>
                @endforeach
            </select>

            <div class="row pull-right">
                <div class="col-md-12">

                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
        </form>

    </div>

    <div class=" col-md-12" id="addcar-container">

        <form method="POST" action="{{route("customers.store")}}" enctype="multipart/form-data">
            <div class="col-md-12">
                {{csrf_field()}}
                <div class="col-md-6">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">First Name*</label>
                                    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" placeholder="Ram/Tarun" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name*</label>
                                    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Ram/Tarun" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phonenumber">Phone Number*</label>
                                    <input type="text" name="phonenumber" class="form-control" id="exampleInputPassword1" placeholder="9440981234" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="altphonenumber">Alternate Phone Number (optional)</label>
                                    <input type="text" name="altphonenumber" class="form-control" id="exampleInputPassword1" placeholder="9440981234">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email">E-mail*</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="sample@vendor.com" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Date of Birth*</label>
                                    <input type="text" name="dob" class="form-control" id="exampleInputPassword1" placeholder="yyyy/mm/dd" required>
                                </div>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address*</label>
                            <!-- <textarea class="form-control" rows="3"></textarea> -->
                            <input type="text" name="address" class="form-control" placeholder="H.no, street" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="locality" placeholder=" Locality, Area" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="city" placeholder="City" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="state" placeholder="State" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="pincode" placeholder="Pincode" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="file-upload">
                        <label for="exampleInputFile">Driving License copy*</label>
                        <div class="file-select">
                            <div class="file-select-button" id="fileName">Choose File</div>
                            <div class="file-select-name" id="noDlCopy">No file chosen...</div>
                            <input type="file" name="dlcopy" id="dlCopy" required>
                        </div>
                    </div>

                    <div class="file-upload">
                        <label for="exampleInputFile">Aadhaar Copy*</label>
                        <div class="file-select">
                            <div class="file-select-button" id="fileName">Choose File</div>
                            <div class="file-select-name" id="noAadharCopy">No file chosen...</div>
                            <input type="file" name="aadharcopy" id="aadharCopy" required>
                        </div>
                    </div>

                    <div class="file-upload">
                        <label for="exampleInputFile">Pan Card Copy (optional)</label>
                        <div class="file-select">
                            <div class="file-select-button" id="fileName">Choose File</div>
                            <div class="file-select-name" id="noPanCard">No file chosen...</div>
                            <input type="file" name="pancardcopy" id="panCard" required>
                        </div>
                    </div>

                    <div class="file-upload">
                        <label for="exampleInputFile">Addditonal Docs (optional)</label>
                        <div class="file-select">
                            <div class="file-select-button" id="fileName">Choose File</div>
                            <div class="file-select-name" id="noAdditionalDocs">No file chosen...</div>
                            <input type="file" name="additionaldocs" id="additionalDocs" required>
                        </div>
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
                $('#addcar-container').toggle();
            });
        });

    </script>
@endsection