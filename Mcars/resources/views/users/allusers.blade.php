@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Users</div>

                <div class="panel-body">
          
                     <table class="table">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role["name"]}}</td>

            </tr>
            @endforeach
            <tr>

            </tr>
        </table>
                </div>
            </div>


        </div>

       
    </div>
</div>
@endsection
