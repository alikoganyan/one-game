<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <div class="container">
        <a class="navbar-brand" href="/admin">One</a>

        <!-- Links -->
        <ul class="navbar-nav navbar-right">
            <li class="nav-item navbar-right">
                <a class="nav-link" href="/admingamers">Gamers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminlevels">Levels</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminvariants">Variants</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <p style="padding-top:7px;">Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

            <!-- Dropdown -->
            {{--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    references

                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Users</a>
                    <a class="dropdown-item" href="#">Levels</a>

                </div>
            </li>--}}
        </ul></div>
</nav>
<div class="container">

    <div class="welcome">
        <p class="welcomeText">Welcome to Admin</p>
    </div>
    </div>


{{--<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            ADMIN
        </div>
        <div class="col-md-6">
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </div>
    </div>
    <div class="row">
        <a href="adminlevels"><div class="box">
                <p class="levels">LEVELS</p>
            </div></a>
    </div>
</div>--}}
</body>
</html>