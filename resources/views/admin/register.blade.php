
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

  <!-- Login -->
  <link rel="stylesheet" href="{{{ asset('/static/admin/css/pages/login.css') }}}">

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
<body class="page-login layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" width="180" src="{{{ asset('static/img/logo_2x.png') }}}" alt="...">
      </div>
      <p>Sign up to find interesting thing</p>
      <form method="post" role="form">
        <div class="form-group">
          <label class="sr-only" for="inputName">Name</label>
          <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputEmail">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword" name="password"
          placeholder="Password">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPasswordCheck">Retype Password</label>
          <input type="password" name="password1" class="form-control" id="inputPasswordCheck" name="passwordCheck"
          placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </form>
      <p>Have account already? Please go to <a href="{{ route('account_login') }}">Sign In</a></p>

      <footer class="page-copyright">
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->


   @include('../js')

   <script type="text/javascript">

    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  
   </script>

</body>
</html>