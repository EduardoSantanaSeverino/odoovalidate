<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Odoo Validate Me - Autenticated User</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/site.css') !!}
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            padding-top: 0px !important; 
        }

        .fa-btn {
            margin-right: 6px;
        }

        .popover {
            max-width: 900px !important;
            word-wrap: break-word;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Odoo Validate Me
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                @if (Auth::guest())
                    <span></span>
                @else
                    <ul class="nav navbar-nav"> 
                        <li><a href="{{ route('clientes.index') }}">Clientes</a></li> 
                        <li><a href="{{ route('clientes.create') }}">Nuevo Cliente</a></li> 
                        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li> 
                        <li><a href="{{ url('/usuarios/create') }}">Nuevo Usuario</a></li> 
                        <li><a href="{{ url('/atentados') }}">Atentados</a></li> 
                    </ul>
                @endif
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    {!! Html::script('js/jquery-2.2.3.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script type="text/javascript"> 
        $(document).ready(function() {
            $('.navbar-collapse a[href="'+location.href+'"]').parents('li').addClass('active');
            $('[data-toggle="popover"]').popover();
        });
    </script>
</body>
</html>