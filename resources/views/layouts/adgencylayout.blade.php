<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img height="40" alt="Brand" src="{{asset('pic/Picture2.png')}}" class="center-block"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/home')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('/adspace')}}">Ad Spaces</a>
                </li>
                <li>
                    <a href="{{url('/aboutus')}}">About Us</a>
                </li>

                @if(Auth::guest())
                    <li>
                        <a href="{{url('/login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{url('/register')}}">Sign Up</a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->role_id == 1)
                                <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-sign-out"></i>User Management</a></li>
                            @endif

                            @if(Auth::user()->role_id == 2)
                                <li><a href="{{ url('/client') }}"><i class="fa fa-btn fa-sign-out"></i>User Management</a></li>
                            @endif

                            @if(Auth::user()->role_id == 3)
                                <li><a href="{{ url('/owner') }}"><i class="fa fa-btn fa-sign-out"></i>User Management</a></li>
                            @endif
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
@yield('content')

@yield('footer')
<footer class="section section-primary"> <div class="container"> <div class="row"> <div class="col-sm-6"> <h1>Footer header</h1> <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud</p></div><div class="col-sm-6"> <p class="text-info text-right"> <br><br></p><div class="row"> <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left"> <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div><div class="row"> <div class="col-md-12 hidden-xs text-right"> <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div></div></div></div></footer>



</body>
</html>