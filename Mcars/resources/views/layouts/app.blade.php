<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--favicon--}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    @auth
                    <a id="sidebarCollapse" class="btn navbar-btn">
                        <i class="fas fa-bars "></i>
                    </a>
                        @endauth

                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'MCars') }}
                    </a>
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('login') }}"><i class="fas fa-lock"></i> Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                               <i class="fas fa-user-secret"></i><span class="user">{{ Auth::user()->name }}</span> <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('users.show', ['id'=>Auth::user()->id])}}">
                                           <i class="far fa-user"></i> Profile
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            @if(Auth::user()->role_id < 3)

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   <i class="fas fa-unlock-alt"></i> Admin <span class="caret"></span>
                                </a>

                                

                                <ul class="dropdown-menu">
                                    <li>

                                        <a href="{{ route('users.index')}}">
                                           <i class="fas fa-users"></i> All Users
                                        </a>

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fab fa-steam-symbol"></i> All Staff
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
       

        <div class="wrapper">
            <!-- Sidebar Holder -->
            @auth
                @include('layouts.sidebar')


            @endauth
            <!-- Page Content Holder -->
            <div id="content">


                <div class="col-md-12">

                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('message') }}</p>
                                @endif
                            @endforeach
                        </div>

                    @yield('content')
                </div>
            </div>
        </div>


        <!-- jQuery CDN -->

        {{--<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>--}}
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 var username;
                 var firstname;
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $('#sidebar span').toggle();
                     $('#user').toggle();

                 });

                 username = $('.user').text();

                 firstname = username.split(" ",1);
                 $("#user").html(firstname[0]);
//                 $('#user').HTML= firstname[0];
             });



       

             /*Side bar Toggle*/
             $("#sidebarCollapse").click(function(e) {
                 console.log("hits");
                 e.preventDefault();
                 $(".wrapper").toggleClass("active");
             });


             
         </script>



</body>
</html>
