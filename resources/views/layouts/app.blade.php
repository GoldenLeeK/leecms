<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title',"Lee的博客") - 一个面向谷歌编程的菜鸟程序员博客</title>
    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/style.min.css') }}" rel="stylesheet">
</head>
<body>
@include('common._header')
<div class="{{ route_class() }}-page">
    @yield('content')
</div>
@include('common._footer')
</body>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
