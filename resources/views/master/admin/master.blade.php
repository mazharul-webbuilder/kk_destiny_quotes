<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/assets/favicon.ico') }}" type="image/x-icon"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/common/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/front/css/style.css')}}">
</head>
<body>

{{--    content goes here--}}
@yield('content')
<script src="{{ asset('/assets/common/js/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('/assets/common/js/bootstrap.js') }}"></script>
</body>
</html>
