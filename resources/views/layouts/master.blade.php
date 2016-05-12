<!doctype html>
<html>
<head>
    <title>
        @yield('title','Communiquety')
    </title>

    <meta charset='utf-8'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://p4.donengs.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://p4.donengs.com/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="http://p4.donengs.com/css/communiquety.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Indie+Flower' type="text/css">
    <!-- Custom CSS -->
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="home-navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img src="http://p4.donengs.com/images/communiquety_logo.png" alt="Communiquety" class="nav-logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    @if (!Auth::check())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href='/announcement/create'>Create a new Announcement</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->
    <header>
      <div class="container">
        <div class="row">
              <img class="img-responsive" src="http://p4.donengs.com/images/communiquety_banner.png" alt="">
        </div>
      </div>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        Copyright &copy; {{ date('Y') }}  Nora Saludo
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script src="js/custom.js" type="text/javascript"></script>

    @yield('body')

</body>
</html>
