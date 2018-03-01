@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Lora|Nanum+Brush+Script|Patua+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
<div class="container">
    <div class="col-md-12">
        <div class="col-md-7">
            <div id="title">
                <h1>M Cars</h1>
                <h5>Car Rentals</h5>
            </div>
        </div>
        <div class="col-md-5">
            <div id="side-panel">
                <p>One Stop Solution for all <span>Self-Driven Car</span> Rentals <i class="fas fa-arrow-right"></i></p>
            </div>

        </div>
    </div>
</div>
@endsection
