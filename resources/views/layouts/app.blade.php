<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title')
        {{ config('app.name') }}
        @show
    </title>
</head>
<body>
    <div class="main-menu">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('static-pages.articles') }}">Articles</a></li>
        </ul>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
