<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>my resturant</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
          background-image: url('data:image/png;base64,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');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" dir="rtl" >
            <div class="container" style="display: flex; ">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول ') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('انشاء حساب جديد') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" >
            @yield('content')
        </main>
    </div>
</body>
</html>
