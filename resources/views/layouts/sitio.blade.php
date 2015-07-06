<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <title>App Name - @yield('title')</title>
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="Flat UI Design">
    <meta name="description" content="BOOTFLAT">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="bookmark" href="favicon.ico"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}" type="text/css">
    <!-- BootFlat -->
    <link rel="stylesheet" href="{!! asset('css/bootflat.css') !!}" type="text/css">
    <!-- PSG Style -->
    <link rel="stylesheet" href="{!! asset('css/sitio.css') !!}" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="{!! asset('js/html5shiv.js') !!}"></script>
      <script type="text/javascript" src="{!! asset('js/respond.min.js') !!}"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Menu -->
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="contain er-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PSG</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <!-- <li class="disabled"><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header">Setting</li>
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="active"><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li class="disabled"><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <div class="navbar-right">
            <a type="button" href="{{ url('auth/register') }}" class="btn btn-primary navbar-btn">Registrarse</a>
            <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".modal  ">Iniciar</button>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- Menu -->
    <!-- Contenedor -->
    <div class="container">
      @yield('content')
    </div>
    <!-- /Contenedor -->
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="clearfix">
          <div class="footer-logo"><a href="#"><!--img src="img/footer-logo.png"-->Bootflat</a></div>
          <dl class="footer-nav">
            <dt class="nav-title">PORTFOLIO</dt>
            <dd class="nav-item"><a href="#">Web Design</a></dd>
            <dd class="nav-item"><a href="#">Branding &amp; Identity</a></dd>
            <dd class="nav-item"><a href="#">Mobile Design</a></dd>
            <dd class="nav-item"><a href="#">Print</a></dd>
            <dd class="nav-item"><a href="#">User Interface</a></dd>
          </dl>
          <dl class="footer-nav">
            <dt class="nav-title">ABOUT</dt>
            <dd class="nav-item"><a href="#">The Company</a></dd>
            <dd class="nav-item"><a href="#">History</a></dd>
            <dd class="nav-item"><a href="#">Vision</a></dd>
          </dl>
          <dl class="footer-nav">
            <dt class="nav-title">GALLERY</dt>
            <dd class="nav-item"><a href="#">Flickr</a></dd>
            <dd class="nav-item"><a href="#">Picasa</a></dd>
            <dd class="nav-item"><a href="#">iStockPhoto</a></dd>
            <dd class="nav-item"><a href="#">PhotoDune</a></dd>
          </dl>
          <dl class="footer-nav">
            <dt class="nav-title">CONTACT</dt>
            <dd class="nav-item"><a href="#">Basic Info</a></dd>
            <dd class="nav-item"><a href="#">Map</a></dd>
            <dd class="nav-item"><a href="#">Conctact Form</a></dd>
          </dl>
        </div>
        <div class="footer-copyright text-center">Copyright © 2014 Flathemes.All rights reserved.</div>
      </div>
    </div>
    <!-- /Footer -->

    <!-- Bootstrap -->
    <script type="text/javascript" src="{!! asset('js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>
    <!-- Bootflat's JS files.-->
    <script type="text/javascript" src="{!! asset('js/icheck.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/selecter.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/stepper.min.js') !!}"></script>
    <!-- PSG Script -->
    <script type="text/javascript" src="{!! asset('js/sitio.js') !!}"></script>
  </body>

</html>
