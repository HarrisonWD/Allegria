<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALLEGRIA</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/odu8lpa.css">
    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
<div class="full-height">
    <div class="wrapper flex-center">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        @yield('content')
    </div>
    </div>
<footer> Copyright <?php echo date('Y')?> ALLEGRIA</footer>
</div>
</body>
</html>
