@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/addvendor.css') }}" >

    <div id="add-car">
        <h2>ASSIGN STAFF TO BOOKING</h2>
    </div>


    <div class="col-md-12" id="select-customer">


        <form method="POST" action="" enctype="multipart/form-data">

            {{csrf_field()}}
            <div class="form-group">
                <label for="vendor">Select Delivering Staff</label>
                <select class="form-control" name="vendorname" required>
                    <option hidden value="">Delivering Staff Name</option>
                    @foreach($staff as $staff)
                        <option value="{{$staff->id}}">{{$staff->firstname}}  {{$staff->lastname}} </option>
                    @endforeach
                </select>

            </div>

            {{--<div class="form-group">--}}
                {{--<label for="vendor">Select Delivering Staff</label>--}}
                {{--<select class="form-control" name="managing" required>--}}
                    {{--<option hidden value="">Managing Staff Name</option>--}}
                    {{--@foreach($staff as $manager)--}}
                        {{--<option value="{{$manager->id}}">{{$manager->firstname}}  {{$manager->lastname}} </option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}

            {{--</div>--}}


            <div class="row pull-right">
                <div class="col-md-12">

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
    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function(){--}}
            {{--$('input[type="checkbox"]').click(function(){--}}
                {{--// var item = $(this).attr('name');--}}
                {{--$('#hidden').toggle();--}}
                {{--$('#addcar-container').toggle();--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}
@endsection