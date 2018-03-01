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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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

                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h5 id="user"></h5>
                        </div>

                        <ul class="list-unstyled components">
                            <li>
                                <a href="#">
                                    <i class="fas fa-circle-notch"></i>&nbsp;&nbsp;
                                    <span class="text">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                                    <i class="fas fa-users"></i>&nbsp;&nbsp;
                                    <span class="text">Vendors</span>
                                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                                </a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li><a href="{{ route('vendors.index') }}"><span class="text">All Vendors</span></a></li>
                                    <li><a href="{{ route('vendors.create') }}"><span class="text">Add Vendor</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                                    <i class="fas fa-car"></i>&nbsp;&nbsp;
                                    <span class="text">Cars</span>
                                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                                </a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li><a href="{{ route('cars.index') }}"><span class="text">All Cars</span></a></li>
                                    <li><a href="{{ route('cars.create') }}"><span class="text">Add Car</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#customerSubmenu" data-toggle="collapse" aria-expanded="false">
                                    <i class="fas fa-user-secret"></i>&nbsp;&nbsp;
                                    <span class="text">Customers</span>
                                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                                </a>
                                <ul class="collapse list-unstyled" id="customerSubmenu">
                                    <li><a href="{{ route('customers.index') }}"><span class="text">All Customers</span></a></li>
                                    <li><a href="{{ route('customers.create') }}"><span class="text">Add Customers</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#staffSubmenu" data-toggle="collapse" aria-expanded="false">
                                    <i class="fas fa-cogs"></i>&nbsp;&nbsp;
                                    <span class="text">Staff</span>
                                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                                </a>
                                <ul class="collapse list-unstyled" id="staffSubmenu">
                                    <li><a href="{{ route('staff.index') }}"><span class="text">All Staff</span></a></li>
                                    <li><a href="{{ route('staff.create') }}"><span class="text">Add Staff</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('bookings.create') }}">
                                    <i class="fas fa-road"></i>&nbsp;&nbsp;
                                    <span class="text">Bookings</span>
                                    <!-- <span class="pull-right"><i class="fas fa-caret-down"></i></span> -->
                                </a><!--
                        <ul class="collapse list-unstyled" id="bookingSubmenu">
                            <li><a href="#">All Staff</a></li>
                            <li><a href="#">Add Staff</a></li>
                        </ul> -->
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" aria-expanded="false">
                                    <i class="fas fa-credit-card"></i>&nbsp;&nbsp;
                                    <span class="text">Billings</span>
                                    <!-- <span class="pull-right"><i class="fas fa-caret-down"></i></span> -->
                                </a>
                                <!-- <ul class="collapse list-unstyled" id="billingSubmenu">
                                    <li><a href="#">All Staff</a></li>
                                    <li><a href="#">Add Staff</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="#billingSubmenu" data-toggle="collapse" aria-expanded="false">
                                    <i class="fas fa-wrench"></i>&nbsp;&nbsp;
                                    <span class="text">Manage</span>
                                    <span class="pull-right"><i class="fas fa-caret-down"></i></span>
                                </a>
                                <ul class="collapse list-unstyled" id="billingSubmenu">
                                    <li><a href="#"><span class="text">Users</span></a></li>
                                    <li><a href="#"><span class="text">Add Users</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>




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
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
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
                 console.log("sidebar: "+username);

                 firstname = username.split(" ",1);
                 console.log("sidebar: "+firstname[0]);
                 $("#user").html(firstname[0]);
//                 $('#user').HTML= firstname[0];
             });
         </script>



</body>
</html>
