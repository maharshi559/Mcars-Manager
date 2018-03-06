@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/allcustomers.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/showvendor.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/showbooking.css') }}" >
    {{--<div id="add-car">--}}
        {{--<h2>LIST OF BOOKINGS</h2>--}}
    {{--</div>--}}


    <div class="container col-md-10 col-lg-offset-1" id="addcar-container">



        <h2>Booking Preview</h2>

        <div class="col-md-12" id="vendor-profile">
            <h3>Customer Details</h3>
            <div class="media panel">
                <div class="media-left">
                    <a href="#">

                        <div id="placeholder">
                            {{--<h1>{{substr($customer->firstname, 0,1)}}{{substr($customer->lastname, 0,1)}}</h1>--}}
                            <h1>MV</h1>
                        </div>
                    </a>
                </div>
                <div class="media-body media-middle">
                    <div class="row">
                        <div class="col-md-8">
                            {{--<h2 class="media-heading">{{$customer->firstname}} {{$customer->lastname}} </h2>--}}
                            <h2 class="media-heading">firstname lastname</h2>

                        </div>

                    </div>
                    <div class="row" id="vendor-info">

                        <div class="col-md-3">
                            <h5 class="media-heading"><span id="active"><i class="fas fa-child"></i></span> Active</h5>
                            <!-- <p>Since May, 2016</p> -->
                        </div>
                        <div class="col-md-3">
                            <h5 class="media-heading"><span id="email"><i class="fas fa-envelope"></i></span> email</h5>
                            <!-- <p>Since May, 2016</p> -->
                        </div>
                        <div class="col-md-3">
                            <h5 class="media-heading"><span id="phone"><i class="fas fa-phone"></i></span> number</h5>
                            <!-- <p>Since May, 2016</p> -->
                        </div>
                        <div class="col-md-3">

                            <h5 class="media-heading"><span id="vendorID"></span>ID  #id</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12" id="booking-dates">
                <h4>Car Booking Dates</h4>
                <h5>11/12/2016 3:30pm - 11/12/2016 8:30pm</h5>

        </div>



        <div class="col-md-12">
            <h3>Booked Car Details</h3>
            <div class="col-md-6">

                <h5>Hyundai Sonata-Vdi</h5>
                <h5>MV 12 AP 1256</h5>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/default-car.png') }}" alt="default image" width="150px" class="img-thumbnail pull-right">
            </div>
        </div>

        <div class="col-md-12">
            <h3>Drop Off and Pickup Details</h3>
            <div class="col-md-12">
                <div class="col-md-6">
                    {{--<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, corporis, debitis eaque eligendi est eum ex </h5>--}}
                    <h5><strong>Deliver at:</strong> 10-1-101/6b, Bhagya nagar Colony, Saroornagar, Hyderabad</h5>
                </div>
                <div class="col-md-6">
                    <h5><strong>Delivered by:</strong> Shyam Naik</h5>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                {{--<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, corporis, debitis eaque eligendi est eum ex </h5>--}}
                    <h5>   <strong>Pick up at:</strong> 10-1-101/6b, Bhagya nagar Colony, Saroornagar, Hyderabad</h5>
                </div>
                <div class="col-md-6">
                    <h5><strong>Pick up by:</strong> N/A</h5>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

@endsection