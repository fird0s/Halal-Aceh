
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <title></title>

  <link rel="apple-touch-icon" href="{{{ asset('/static/admin/images/apple-touch-icon.png') }}}">
  <link rel="shortcut icon" href="{{{ asset('/static/admin/images/favicon.ico') }}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{{ asset('/static/admin/css/bootstrap.min.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/css/bootstrap-extend.min.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/css/site.min.css') }}}">

  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/animsition/animsition.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/asscrollable/asScrollable.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/switchery/switchery.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/intro-js/introjs.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/slidepanel/slidePanel.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/flag-icon-css/flag-icon.css') }}}">

  <!-- Plugin -->
  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/chartist-js/chartist.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/vendor/aspieprogress/asPieProgress.css') }}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{{ asset('/static/admin/css/dashboard/v2.css') }}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{{ asset('/static/admin/fonts/web-icons/web-icons.min.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/fonts/font-awesome/font-awesome.min.css') }}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="{{{ asset('/static/admin/vendor/html5shiv/html5shiv.min.js') }}}"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{{ asset('/static/admin/vendor/media-match/media.match.min.js') }}}"></script>
    <script src="{{{ asset('/static/admin/vendor/respond/respond.min.js') }}}"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{{ asset('/static/admin/vendor/modernizr/modernizr.js') }}}"></script>
  <script src="{{{ asset('/static/admin/vendor/breakpoints/breakpoints.js') }}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="{{{ asset('/static/admin/images/logo.png') }}}" title="Remark">
        <span class="navbar-brand-text"> Remark</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="{{{ asset('/static/admin/portraits/5.jpg') }}}" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon fa fa-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon fa fa-lock" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
        @include('admin/menu')
         


          
        </div>
      </div>
    </div>

  </div>

  <!-- Page -->
  <div class="page">
    <div class="page-header page-header-bordered">
      <ol class="breadcrumb">
        <li><a href="../index.html">Home</a></li>
        <li><a href="javascript:void(0)">Account</a></li>
        <li class="active">Social Media</li>
      </ol>
      <h1 class="page-title">Online Campaign</h1>
    </div>

    <div class="container-fluid">
    @if (Session::has('success'))
        <div class="alert alert-success">
          {{Session::get('success')}}
        </div>
        @endif

        @if (Session::has('error'))
        <div class="alert alert-danger">
          {{Session::get('error')}}
        </div>
        @endif
                                <form method="POST" action="">
                                <div class="col-md-6 col-sm-6">
                                    

                                        <section id="social">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                                    <input type="text" name="instagram" value="{{ $social_media->instagram }}" class="form-control">
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                    <input type="text" name="twitter" value="{{ $social_media->twitter }}" class="form-control">
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                    <input type="text" name="facebook" value="{{ $social_media->facebook }}" class="form-control">
                                                </div>
                                            </div><!-- /.form-group -->
                                        </section>
                                </div>     
                                <div class="col-md-6 col-sm-6">       
                                         <section id="social">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                                    <input type="text" name="google_plus" value="{{ $social_media->google_plus }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-btc"></i></span>
                                                    <input type="text" name="BBM" style="text-transform:uppercase" value="{{ $social_media->bbm }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Save Change"></input>
                                            </div><!-- /.form-group -->
                                          </section>    
                                </div></form>          
                                    <!-- /#form-contact -->
                                </div><!-- /.col-md-9 -->
                            </div>
  </div>
  <!-- End Page -->

  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2016 HalalAceh.com</span>
    <div class="site-footer-right">
      Created with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">our team</a>
    </div>
  </footer>

  @include('../js')

</body>

</html>