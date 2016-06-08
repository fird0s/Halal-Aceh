
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <title>HalalAceh | Syariah Trip in Aceh</title>

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

  <!-- LEAFLET -->
  <link href="{{{ asset('static/plugins/leaflet/leaflet.css') }}}" rel="stylesheet">

  <link rel="stylesheet" href="{{{ asset('/static/plugins/Leaflet/Leaflet/dist/leaflet.css') }}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{{ asset('/static/admin/fonts/web-icons/web-icons.min.css') }}}">
  <link rel="stylesheet" href="{{{ asset('/static/admin/fonts/font-awesome/font-awesome.min.css') }}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <style type="text/css">
  #mapid {
        cursor: crosshair;
    }

  </style>

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
        
        <span class="navbar-brand-text"> Halal Aceh | Admin</span>
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
                <img style="width: 30px; height: 30px;" src="{{{ asset('media/user') }}}/{{ $profile->photo_profile }}" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="{{ route('account_profile') }}" role="menuitem"><i class="icon fa fa-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="{{ route('account_settings') }}" role="menuitem"><i class="icon fa fa-lock" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="{{ route('account_logout') }}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
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
        <li class="active">Add Tour Package</li>
      </ol>
      <h1 class="page-title">Package</h1>
    </div>

    <div class="container-fluid">
        <form method="POST" action="" enctype="multipart/form-data">
            <div clas="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Tour Name</label>
                    <input type="text" class="form-control" name="tour_name">
                </div>
                <div class="form-group">
                    <label>Group Size</label>
                    <select class="form-control" id="sel1" name="group_size" >
                      <option value="1-5">1-5</option>
                      <option value="5-10">5-10</option>
                      <option value="10-15">10-15</option>
                      <option value="15-20">15-20</option>
                      <option value="20-25">20-25</option>
                      <option value="25-30">25-30</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>Price/Person</label>
                    <input type="text" class="form-control" name="price_per_person">
                </div>


                <div class="form-group">
                  <label>Image</label>
                  <div class="input-group input-group-file">
                    <input type="text" class="form-control" readonly="">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="images[]" multiple="">
                      </span>
                    </span>
                  </div>
                </div>



              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                    <label>Duration</label>
                    <input type="text" class="form-control" name="duration">
                </div>
                
               

                <div  class="form-group">

                  <div id="mapid" style="width: 100%; height: 230px; margin-top: 2px;"></div>
                  <input type="text" id="latitude" class="form-control hide" name="latitude">
                  <input type="text" id="longtitude" class="form-control hide" name="longtitude">
                </div>

                

              </div>
            </div>

            <div class="clear" style="clear:both;"></div>

            <div class="row">

              <div class="col-md-6">

                <div class="form-group" style="">
                    <label>Price Include</label>
                    <textarea class="form-control ckeditor" rows="5" name="include"></textarea>
                </div>

              </div>
              
              <div class="col-md-6">

                <div class="form-group" style="">
                    <label>Price Exclude</label>
                    <textarea class="form-control ckeditor" rows="5" name="exclude"></textarea>
                </div>

              </div>

              <div class="form-group" style="padding: 15px;">
                    <label>Description</label>
                    <textarea class="form-control ckeditor" rows="5" name="description"></textarea>
                </div>


                <div class="form-group" style="padding: 15px;">
                    <label>Itinerary</label>
                    <textarea class="form-control ckeditor" rows="5" name="itinerary"></textarea>
                </div>


            </div>

            <div class="form-group" style="padding-left: 15px;">
                <button type="submit" class="btn btn-primary">Add Tour Package</button>
            </div>

        </form>
    </div>

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

  <script src="{{{ asset('static/plugins/leaflet/leaflet.js') }}}"></script>

  <script type="text/javascript">
    
    var mymap = L.map('mapid').setView([5.5417, 95.3333], 12);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
        maxZoom: 18,
        id: 'mapbox.streets'
    }).addTo(mymap);

    function onMapClick(e) {
        L.marker([e.latlng.lat, e.latlng.lng]).addTo(mymap);
        document.getElementById("latitude").value = e.latlng.lat;
        document.getElementById("longtitude").value = e.latlng.lng;

    }

    mymap.on('click', onMapClick);
      
  </script>

  @include('../js')

</body>

</html>