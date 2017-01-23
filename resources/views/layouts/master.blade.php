<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/master.css">
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
    
</head>
<body>
    
    <!-- left fixed nav part -->
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ">
        <nav data-spy="affix" class="sidebar">
        		<div class="nav nav-stacked">
                    <a class="no-hover" href="{{ url('/dashboard') }}"><img src="img/logo.png"></a>
                    <a {{ setActive('dashboard') }} href="{{ url('/dashboard') }}">Dashboard</a>
                    <hr>
                    <a class="disabled" {{ setActive('projects') }} href="{{ url('/Projects') }}">Projects</a>
                    <hr>
                    <a {{ setActive('tasks') }} href="{{ url('/tasks') }}">Tasks</a>
                    <hr>
                    <a class="disabled" {{ setActive('finances') }} href="{{ url('/finances') }}">Finances</a>
                    <hr>
        		</div>
        </nav>
        </div>
    <!-- end of left fixed nav -->
    <!-- start of top nav-bar -->
    
    <div class="col-md-10 no-padding ">

    <nav class="nav navbar-default bg-white navbar-fixed-top">
        <div class="nav-content container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <!-- logo -->
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- <ul class="nav navbar-nav">
                &nbsp;
            </ul> -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="clear"></div>
    <!-- end of top nav-bar -->
    <div class="clear"></div>
    <section class="content">
        @yield('content')
    </section>
    <!-- <footer>
        <div class="container">
            <div class="logo-container">
                <a href="https://www.behance.net/valmarkencia" target="_blank"><img src="/img/behance-logo-32.png"></a>
            </div>
            valmarkencia@gmail.com<br>
            © 2017 Valenciamark. All Rights Reserved.
        </div>
    </footer> -->

    </div>
    <!-- end div of  -->
    </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
