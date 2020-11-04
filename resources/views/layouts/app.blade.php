<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ATP PUCPR') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animated.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fiori-fundamentals.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/atp_puc.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/material/bin/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}" defer></script>


</head>
<body>

<div id="app" class="">

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img style="width: 100%;height: 100%" src="{{asset('img/hitech.jpg')}}">
                </div>
                <a><img class="circle white" id="myimg" src="{{asset('img/html5.png')}}"></a>
                <a><span class="white-text name">{{ Auth::user()->name }} </span></a>
                <a><span class="white-text email">{{ Auth::user()->email }}</span></a>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header"><i class="material-icons">cloud</i>Items</a>
                    <div class="collapsible-body">
                        <ul>
                        <li><a href="/home"><i class="material-icons">home</i>Empréstimos</a></li>
                        <li><a href="/item"><i class="material-icons">event_note</i>Cadastrar um item</a></li>
                        <li><a href="/emprestimo"><i class="material-icons">event_note</i>Emprestar um item</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div class="divider"></div>
        </li>

        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header"><i class="material-icons">settings</i>Setup</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href=""><i class="material-icons">video_library</i>Alterar dados</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <li>
            <div class="divider"></div>
        </li>
        <ul class="">
            <li><a href="javascript:void" onclick="$('#logout-form').submit();"><i class="material-icons">settings_power</i>Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
            @csrf
        </form>
    </ul>
    <nav class="white darken-4">
        <div class="nav-wrapper"
             style="background-image: linear-gradient(to bottom,rgba(255,255,255,1),rgba(220,220,220,0.8))">
            <a  data-target="slide-out" style="margin-top:0.2%" class="sidenav-trigger show-on-large blue darken-2 btn-floating
            btn-large waves-effect waves-light" id="menu"><i
                    class="material-icons icon-black white-text large">menu</i></a>
            <div class="col s4 m4">
                <a href="#" class="brand-logo right">

                    <img class="right imgsize" id="" src="{{asset('img/html5.png')}}" style="width:4%;margin-top: 5px;margin-right: 20px">
                </a>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

