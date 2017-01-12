<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" href="/img/fav.png" type="image/png">

    <!-- Scripts -->
    <script>
        window.Portfolio = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
</head>
<body>
    
    <!-- nav part -->
    <nav class="nav navbar-default">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <!-- logo -->
            <a href="/" class="navbar-brand"><img class="logo" src="/img/logo.png" alt="markvalencia logo"><span class="bold">MARK</span>VALENCIA</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- <ul class="nav navbar-nav">
                &nbsp;
            </ul> -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @if(Auth::user())
                    <li><a href="{{ url('/tasks') }}">Tasks</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Profile <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
        <!-- end of nav -->
        @yield('content')
    <footer>
        <div class="container">
            <div class="logo-container">
                <a href="https://www.behance.net/valmarkencia" target="_blank"><img src="/img/behance-logo-32.png"></a>
            </div>
            © 2017 Valenciamark. All Rights Reserved.
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
      function toggleOn() {
        $('#toggle-one').bootstrapToggle('on')
      }
    </script>
    <script src="/js/app.js"></script>
</body>
</html>
