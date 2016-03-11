
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
          
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>

           <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">Quick Links <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/panels.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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
        <li class="active">Profile</li>
      </ol>
      <h1 class="page-title">Your Profile</h1>
    </div>

    <div class="row container-fluid">
    
      <div class="col-md-10">

          <form class="form-horizontal" method="POST" action="">
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

            <div class="widget-header-content" style="text-align: center;">
                <a class="avatar avatar-lg" onclick="document.getElementById('file_profile').click(); return false;">
                  <img src="{{{ asset('/static/admin/portraits/5.jpg') }}}" alt="..."> Change Image
                </a>
            </div>

            <input type="file" name="img_profile" id="file_profile" style="visibility: hidden;" accept="image/*">
            <div class="form-group">
              <label class="col-sm-3 control-label">Fullname: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Full Name" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Email: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Full Name" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Address: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $profile->full_address }}" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Gender: </label>
              <div class="col-sm-9">
                @if ($profile->gender == 1)
                <div class="radio-custom radio-default radio-inline">
                  <input type="radio" id="inputHorizontalMale" name="gender" value="1" checked="">
                  <label for="inputHorizontalMale">Male</label>
                </div>
                <div class="radio-custom radio-default radio-inline">
                  <input type="radio" id="inputHorizontalFemale" name="gender" value="2">
                  <label for="inputHorizontalFemale">Female</label>
                </div>
                @elseif ($profile->gender == 2)
                <div class="radio-custom radio-default radio-inline">
                  <input type="radio" id="inputHorizontalMale" name="gender" value="1">
                  <label for="inputHorizontalMale">Male</label>
                </div>
                <div class="radio-custom radio-default radio-inline">
                  <input type="radio" id="inputHorizontalFemale" name="gender" value="2" checked="">
                  <label for="inputHorizontalFemale">Female</label>
                </div>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Kecamatan: </label>
              <div class="col-sm-9">
                <select class="form-control" id="sel1" name="district" >
                  @foreach ($district as $data)
                    <option value="{{ $data->id }}" @if ($data->id == $profile->district) selected @endif > {{ $data->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Phone Number: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="phone"  value="{{ $profile->phone_number }}" placeholder="+62 " autocomplete="off">
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-3 control-label">About Me: </label>
              <div class="col-sm-9">
                <textarea class="form-control" name="about" placeholder="Briefly Describe Yourself">{{ $profile->about_me }}</textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary">Save Change </button>
              </div>
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

  @include('../js')

</body>

</html>