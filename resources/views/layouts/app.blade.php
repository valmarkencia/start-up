<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Web Developer — {{ config('app.name', 'Portfolio') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" href="/img/fav.png" type="image/png">

    <!-- Scripts -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-88041687-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script>
        window.Portfolio = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <meta name="google-site-verification" content="YSZhC2kNnrzWqRUmwKDlu3Xmvpw4ylXUojmlslf8NT8" />
</head>
<body>
    
    <!-- nav part -->
    <nav class="nav navbar-default full-height">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <!-- logo -->
            <a href="/" class="navbar-brand"><img class="logo" src="/img/logo.png" alt="valenciamark logo">Valenciamark</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="navbar-nav navbar-right">
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
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
    <footer class="footer" id="form-response">
        <div class="container">
            <div class="logo-container">
               Follow me at <a href="https://www.behance.net/valmarkencia" target="_blank"><img src="/img/behance-be-logo-01.png"></a>
            </div>
            <span>
            @if (session('status'))
                <div class="alert alert-success form">
                    {{ session('status') }}
                </div>
            @elseif(session('status'))
                <div class="alert alert-danger form">
                    {{ session('failed') }}
                </div>
            @else
                <form action="/sendmail" method="POST" class="form">
                <div style="margin-bottom:10%;">Want to make your game-changing idea come to life? Contact me!</div>
                    {{csrf_field()}}
                    <input required type="text" name="name" class="form-control" placeholder="Name">
                    <input required type="email" name="email" class="form-control" placeholder="Email">
                    <textarea required name="msg" class="form-control" placeholder="Message" rows="3" style="max-width: 100% !important;"></textarea>
                    <button class="btn btn-block contact" type="submit">Submit</button>
                </form> 
            @endif
            </span>
            <p style="margin-top:2%;">Copyright Valenciamark  2016 | All rights reserved.</p>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
