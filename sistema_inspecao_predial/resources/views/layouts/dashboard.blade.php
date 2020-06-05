<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Ficha de Inspeção Predial</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

    <!-- awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google API  -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3WWENSVNnI9uD3-EAJeWg636OlX84syc&libraries=places" async defer></script> -->




</head>

<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-success  ">
            <div class="container border-bottom">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="{{ asset('img/logo.png') }}" alt="logo-uniceplac" srcset="" width="60">
                    UNICEPLAC
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Faça seu Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registre-se') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i><span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Panel Dashboard -->
        <section id="home-dashboard2">
            <div class="container-fluid">
                <div class="row">
                    <!-- Painel -->
                    <div class="col-md-2 col-sm-2 col-12 p-1 bg-light">
                        <button class="btn btn-success btn-lg dropdown-toggle menu" data-toggle="collapse" data-target="#painel-adm" aria-expanded="true" aria-controls="painel-adm">
                            Painel Administrativo
                        </button>
                        <div class="collapse  collapse show " id="painel-adm">
                            <ul class="list-group aling-self-center p-4 list">
                                <li class="list-group-item">
                                    <a href="{{route('home')}}" class="links">
                                        <i class="fas fa-home fa-1x icon"></i>
                                        <span class="pl-auto text-wrap item">Home</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{route('edificio.create')}}" class="links">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        <span class="pl-auto text-wrap item ">Edificios</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{route('user.edit',[Auth::user()->id])}}" class="links">
                                        <i class="fas fa-user icon"></i>
                                        <span class="pl-auto text-wrap item">Perfil</span></a>
                                </li>
                                <li class="list-group-item item">
                                    <a href="{{route('edificio.index')}}" class="links">
                                        <i class="fas fa-history icon" class="links"></i>
                                        <span class="pl-auto text-wrap item">Historico</span></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- Formularios -->
                    <div class="col-md-10 col-sm-10 col-12 p-5 " id="screan">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-12" id="box-form">

                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <!-- fim formularios -->

                </div>
            </div>
        </section>

        <footer class="text-center border bg-success text-white p-2 fixed-bottom">
            <p>&copy; <a href="#" class="stretched-link text-white">UNICEPLAC</a> - Centro Universitário do Planalto Central
                Apparecido dos Santos 2019</p>
        </footer>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- API google Maps -->
    <!-- Google API  -->
    <!-- <script src="{{ url(mix('Web/js/getLocation.js'))}}"></script> -->

    <!-- API google Maps -->
    <!-- Google API  -->
    <!-- <script src="{{ url(mix('Web/js/setLocation.js'))}}"></script> -->

</body>

</html>