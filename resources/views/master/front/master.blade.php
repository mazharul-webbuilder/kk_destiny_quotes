<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('/assets/favicon.ico') }}" type="image/x-icon"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/common/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/front/css/style.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('/assets/front/images/logo.png') }}" alt="" class="logo_design">
                </a>
                <form class="d-flex" method="POST" action="{{route('search')}}">
                    @csrf
                    <input class="form-control me-2" name="searchpattern" type="search" placeholder="Search" aria-label="Search">
                    <input class="btn btn-outline-success" type="submit" value="Search">
                </form>
                <ul class="navbar-nav ms-0">

                    @if(\Illuminate\Support\Facades\Auth::guest())
                        <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
                        <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{\Illuminate\Support\Facades\Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </nav>
    </header>

{{--    content goes here--}}
    @yield('content')

    @auth
    <div class="fixed-bottom">
        <a href="{{route('admin.quotes')}}" class="btn btn-sm btn-success">Go To Admin Panel</a>
    </div>
    @endauth



<script src="{{ asset('/assets/common/js/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('/assets/common/js/bootstrap.js') }}"></script>
@include('front.javascript')
</body>
</html>
