<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Mark Anthony Valencia is the founder of Valencia Design Co., creative web designer and developer. The company offers web design and development, UI/UX design and graphic design.">
    <meta name="keywords" content="Valencia Design Co., website design,web design,full stack developer,web developer,website developer,UI design,user interface design,UX design,user experience design,graphic design,print design,web design freelancer,mark anthony valencia,valenciamark, Philippines web designer">

    <title>Valencia Design Co. | {{ config('app.name', 'Portfolio') }}</title>

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
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "WebPage",
          "brand": "Valencia Design Co.",
          "url": "https://www.valenciamark.com",
          "description": "I am creative web designer and developer. I offer web design and development, UI/UX design and graphic design."
        }
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
    @if(url()->current() == url('/'))
    <nav class="nav navbar-default full-height">
    @else
    <nav class="nav navbar-default">
    @endif
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <!-- logo -->
            <div itemscope itemtype="http://schema.org/Organization">
                <a itemprop="url" href="{{ url('/') }}" class="navbar-brand"><img itemprop="logo" class="logo" src="/img/logo.png" alt="valenciamark logo">Valencia Design Co.</a>
            </div>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="navbar-nav nav-links navbar-right">
                    <li {{ setActive('/') }}><a href="{{ url('/') }}" class="plinks">Home</a></li>
                    <li {{ setActive('works') }}><a href="{{ url('/works') }}" class="plinks">Works</a></li>
                    <li {{ setActive('contact') }}><a href="{{ url('/contact') }}" class="plinks">Contact</a></li>
                    @if(Auth::user())
                    <li><a href="{{ url('/tasks') }}">Tasks</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" id="dropdown-menu1">
                            Profile <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-menu1">
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
        <!-- Loading screen -->
        <div class="loading">
            <div class="loading-content">
                <span>Please wait...</span><br>
                <img src="/img/ring.gif">
            </div>
        </div>
        <div class="content-loaded">
        @yield('content')
        </div>
    <footer class="footer" id="form-response">
        <div class="container">
            <div class="logo-container">
            <span itemscope itemtype="http://schema.org/Organization"><br>
            <link itemprop="url" href="https://www.valmarkencia.com"> <br>
               Follow me at <a itemprop="sameAs" href="https://www.behance.net/valmarkencia" target="_blank"><img src="/img/behance-be-logo-01.png"></a>
            </span>
            </div>
            <span>
            <div class="alert alert-success form" id="subs-success">
                Thank you for subscribing!
            </div>
            @if (session('status'))
                <div class="alert alert-success form">
                    {{ session('status') }}
                </div>
            @elseif(session('failed'))
                <div class="alert alert-danger form">
                    {{ session('failed') }}
                </div>
            @else
                <form action="/subscribe" method="POST" class="form" id="sub-form">
                <div style="margin-bottom:10%;">Want to get updates on my works and future projects? Subscribe now!</div>
                    {{csrf_field()}}
                    <input required type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Name">
                    <input required type="email" name="email" class="form-control" placeholder="Email">
                    <div class="alert alert-danger" id="email-error">
                        Email already exists. Please use another email
                    </div>
                    @if(session('email-exist'))
                    <div class="alert alert-danger">
                        {{session('email-exist')}}
                    </div>
                    @endif
                    <button id="subcription-button" class="btn btn-block contact" type="submit">Subscribe</button>
                </form> 
            @endif
            </span>
            <p style="margin-top:2%;">Copyright Valencia Design Co. 2017 | All rights reserved.</p>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.plinks').on('click', function(){
                $('.content-loaded, nav , .footer').css('display', 'none');
                $('.loading').css('display', 'block').fadeout();
            });

            $('#sub-form').submit(function(e){
                e.preventDefault();
                var data = $(this).serialize();
                $.ajax({
                    method: 'POST',
                    url: '/subscribe',
                    data: data,
                    success: function(response)
                    {
                        if(response === $('input[name=email]').val())
                        {
                            $('#email-error').css('display', 'block');
                            $('input[name=email]').keydown(function(){
                                $('#email-error').removeAttr( 'style' );
                            });
                        }
                        else if(response === 'success')
                        {
                            $('#subs-success').css('display', 'block');
                            $('#sub-form').css('display', 'none');
                        }
                    }
                })
            });
        });
    </script>
</body>
</html>
