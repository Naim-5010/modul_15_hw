<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blade </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
@include('Layout.header')
    @yield('content')
@include('Layout.footer')
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>