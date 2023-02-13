<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('style')
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">ß
</head>
<body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/home">JOMKAHWIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link underline" href="/home"><i class="fa fa-house"></i> Home</a>
                            <a class="nav-link underline" href="/service"><i class="fa fa-bars"></i> Services</a>
                            <a class="nav-link underline" href="/cart"><i class="fa fa-shopping-cart"></i> Cart</a>
                            <a class="nav-link underline" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-ban"></i>Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                            </form>
                        </li>
               
                    </ul>
               </div>
        </nav>
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    @yield('script')
</body>
</html>
