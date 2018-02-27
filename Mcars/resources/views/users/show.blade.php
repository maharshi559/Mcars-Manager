@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::User()->name}}'s Profile</div>

                <div class="panel-body">

                     <table class="table">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
            </tr>
            <tr>
                <td>{{Auth::User()->name}}</td>
                <td>{{Auth::User()->email}}</td>
                <td>{{$user->role["name"]}}</td>

            </tr>
            <tr>
                <td>{{$user}}</td>
            </tr>
        </table>
                </div>
            </div>


        </div>

       
    </div>
</div>
@endsection
