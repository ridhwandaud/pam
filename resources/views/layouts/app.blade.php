<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HR System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .chat {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      .chat li {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
      }

      .chat li .chat-body p {
        margin: 0;
        color: #777777;
      }

      .chat-overflow {
        overflow-y: scroll;
        height: 500px;
      }

      ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
      }

      ::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
      }

      ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
      }
    </style>
</head>
<body>
    <div id="app">
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
                        {{ config('app.name', 'Hr System') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                                </a> -->
                                <!-- <ul class="dropdown-menu notifications" role="menu">
                                    <div class="header clearfix">
                                        <strong>Notifications</strong>
                                        <a href="">Mark All as Read</a>
                                        <a href="">Settings</a>
                                    </div>
                                    <li role="separator" class="divider"></li>
                                    <div class="clearfix msg-list">
                                        <a href="/article">
                                            <div class="img-area">
                                                <img class="img-circle" src="{{ Auth::user()->img_path }}" height="50">
                                            </div>
                                            <div class="msg-area">
                                                <div>Ridhwan post a new article</div>
                                                <span>1 min ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="clearfix msg-list">
                                        <a href="/article">
                                            <div class="img-area">
                                                <img class="img-circle" src="{{ asset('images/user/2.png') }}" height="50">
                                            </div>
                                            <div class="msg-area">
                                                <div>Abu reply to your post.</div>
                                                <span>1 day ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </ul> -->
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/profile">Profile</a>
                                    </li>
                                    
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="/settings/profile">Settings</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
