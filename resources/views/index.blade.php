<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="syariah Trip in Aceh, Syariah Trip in Aceh, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Halal Aceh - Syariah Trip in Aceh agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>Halal Aceh - Syariah Trip in Aceh</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="{{{ asset('/static/css/base.css') }}}" rel="stylesheet">
    
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <!-- <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div> -->
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <i class="icon-phone">
                            
                        </i><strong>+62 852 7054 6820
                        </strong>

                         <b>/</b>       

                        <i class="icon-email">
                            
                        </i><strong>contact@halalaceh.com
                        </strong>
                    </div>

                     
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                          <ul id="top_links">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="{{ route('account_login') }}" id="access_link">Sign in</a>
                                    
                                </div><!-- End Dropdown access -->
                            </li>
                            <li><a href="{{ route('account_register') }}" ><i span class="icon-plus"></i>Register</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{ route('home') }}"><img src="{{{ asset('/static/img/logo.png') }}}" width="160" height="34" alt="Syariah Trip in Aceh" data-retina="true" class="logo_normal"></a>
                        <a href="{{ route('home') }}"><img src="{{{ asset('/static/img/logo-black.png') }}}" width="160" height="34" alt="Syariah Trip in Aceh" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo_sticky.png" width="160" height="34" alt="Syariah Trip in Aceh" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="{{ route('home') }}" class="show-submenu">Home </a>
                                
                            </li>

                            <li class="submenu">
                                <a href="{{ route('tour_package') }}" class="show-submenu">Book Tour </a>
                            </li>  

                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Halal Spot <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="{{ route('hotel') }}">Hotel</a></li>
                                    <li><a href="{{ route('events') }}">Event</a></li>
                                    <li><a href="{{ route('restaurant') }}">Restaurant</a></li>
                                    <li><a href="{{ route('mosque') }}">Mosque</a></li>
                                    <li><a href="{{ route('tourist_attraction') }}">Tourist Attraction</a></li>
                                </ul>
                            </li>
                                
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Travel Tools <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="{{ route('qibladirection') }}">Qibla Direction</a></li>
                                    <li><a href="{{ route('reachmosque') }}">Reach Mosque</a></li>
                                </ul>
                            </li>

                          

                            <li class="submenu">
                                <a href="{{ route('aboutus') }}" class="show-submenu">About Us </a>
                            </li>

                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <div class="dropdown dropdown-search">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                             <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart (0) </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_1.jpg" alt=""></div>
                                        <strong>
                                        <a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_2.jpg" alt=""></div>
                                        <strong>
                                        <a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="img/thumb_cart_3.jpg" alt=""></div>
                                        <strong>
                                        <a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->
    
<section class="parallax-window" data-parallax="scroll" data-image-src="{{{ asset('static/img/masjid-lampriet-night.jpg') }}}" data-natural-width="1400" data-natural-height="600">
    <!-- <div class="intro_title">
        <h1 class="animated fadeInDown">Affordable Paris tours</h1>
        <p class="animated fadeInDown">Syariah Trip in Aceh / Tour Tickets / Tour Guides</p>
       <a href="#" class="animated fadeInUp button_intro">View Tours</a> <a href="#" class="animated fadeInUp button_intro outline">View Tickets</a>
    </div> -->
    <div id="search_bar_container">
                    <div class="container">
                            <div class="search_bar">
                            <span class="nav-facade-active" id="nav-search-in">
                            <span id="nav-search-in-content" style="">All Spot</span>
                            <span class="nav-down-arrow nav-sprite"></span>
                            <select title="Search in" class="searchSelect" id="searchDropdownBox" name="tours_category">
                                <option value="All Tours" title="All Tours">All Spot</option>
                                <option value="Museums" title="Museums">Event</option>
                                <option value="Tickets" title="Tickets">Hotels</option>
                                <option value="Hotels" title="Hotels">Restaurant</option>
                                <option value="Restaurants" title="Restaurants">Destination</option>
                            </select>
                            </span>
                            <div class="nav-searchfield-outer">
                                <input type="text" autocomplete="off" name="field-keywords" placeholder="Type your search terms ...." id="twotabsearchtextbox">
                            </div>
                            <div class="nav-submit-button">
                                <input type="submit" title="Cerca" class="nav-submit-input" value="Search">
                            </div>
                        </div><!-- End search bar-->
                    </div>
                </div>
</section><!-- End hero -->

<div class="container margin_60">
    
        <div class="main_title">
            <h2>Banda Aceh <span>Top</span> Spot</h2>
            <p>Visit Banda Aceh with all tourism objects, then interact with the cultural, <br>culinary and entertaining dance movement. You will be amazed!</p>
        </div>
        
        <div class="row">
        
             @foreach ($tour as $tour)
            
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="{{ route('get_tour_package', ['slug_url' => $tour->slug_url]) }}">
                        <img src="{{{ asset('media/tour_package') }}}/{{ unserialize($tour->images)[0] }}" width="800" height="533" class="img-responsive" alt="">
                        <!-- <div class="ribbon top_rated"></div> -->
                        <div class="short_info">
                            <!-- <i class="icon_set_1_icon-14"></i>Eat &amp; drink --><span class="price"><sup>$</sup>{{ $tour->price_per_person }}</span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h4>{{ $tour->package_name }}</h4>
                        <div class="rating">
                            <!-- <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small> -->
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <!-- <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a> -->
                        </div><!-- End wish list-->
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

              @endforeach
            
        </div><!-- End row -->
        <p class="text-center nopadding">
            <!-- <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all destination (144) </a> -->
        </p>
    </div><!-- End container -->
    
    
    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>Other <span>Popular</span> destination</h2>
                
            </div>
            <div class="row add_bottom_45">
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="{{ route('get_tourist_attraction', 'masjid-raya-baiturrahman') }}"><i class="icon_set_1_icon-1"></i>Baiturrahman Mosque<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="{{ route('get_tourist_attraction', 'meusium-tsunami') }}"><i class="icon_set_1_icon-4"></i>Tsunami Meusium<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-44"></i>Putroe Phang dan Pinto Khop Garden<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>Monument of Pesawat RI 001<span class="other_tours_price"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="{{ route('get_tourist_attraction', 'kerkhof') }}"><i class="icon_set_1_icon-1"></i>Kher Koff<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-4"></i>Ulee Lheue Beach<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-30"></i>PLTD Apung<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="{{ route('get_tourist_attraction', 'kuburan-massal-ule-lhee') }}"><i class="icon_set_1_icon-3"></i>Kuburan Massal<span class="other_tours_price"></span></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-4 other_tours">
                    <ul>
                        <li><a href="{{ route('get_tourist_attraction', 'taman-putroe-phang') }}"><i class="icon_set_1_icon-37"></i>Putro Phang Garden<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="{{ route('get_tourist_attraction', 'gunongan') }}"><i class="icon_set_1_icon-1"></i>Gunongan<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="{{ route('get_tourist_attraction', 'boat-di-atas-rumah') }}"><i class="icon_set_1_icon-50"></i>Boat on The House<span class="other_tours_price"></span></a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-44"></i>Tour Eiffel<span class="other_tours_price"></span></a>
                        </li>
                        
                    </ul>
                </div>
            </div><!-- End row -->
            
            <div class="banner colored add_bottom_30">
                <h4>Discover our Top tours <span>from $34</span></h4>
                <p>
                    We have big deal for you, everything you need that always happen.
                </p>
                <a href="single_tour.html" class="btn_1 white">Read more</a>
            </div>
            
        </div><!-- End container -->
    </div><!-- End white_bg -->
    
    <section class="promo_full">
    <div class="promo_full_wp magnific">
        <div>
            <h3>ISLAMIC FANTASTIC TOURISM</h3>
            <p>
                We provide all your need to make you happy. Enjoy, Tasted, and Free.
            </p>
            <a href="https://www.youtube.com/watch?v=mnK7j7TEu-s" class="video"><i class="icon-play-circled2-1"></i></a>
        </div>
    </div>
    </section><!-- End section -->
    
   
    
   @include('portal/footer')

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="{{{ asset('/static/js/jquery-1.11.2.min.js') }}}"></script>
<script src="{{{ asset('/static/js/common_scripts_min.js') }}}"></script>
<script src="{{{ asset('/static/js/functions.js') }}}"></script>

 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="{{{ asset('/static/js/map_home.js') }}}"></script>
<script type="text/javascript" src="{{{ asset('/static/js/infobox.js') }}}"></script>

  </body>
</html>