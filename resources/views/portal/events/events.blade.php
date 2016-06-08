<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
   <title>Halal Aceh - Syariah Trip in Aceh</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="{{{ asset('static/css/base.css') }}}" rel="stylesheet">
    
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
      <script src="{{{ asset('static/js/html5shiv.min.js') }}}"></script>
      <script src="{{{ asset('static/js/respond.min.js') }}}"></script>
    <![endif]-->

    <style type="text/css">
    #hero {
        background: #4d536d url({{{ asset('static/img/masjid-lampriet.jpg') }}}) no-repeat center center;
    }
    </style>
        
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

   <!--  <div id="preloader">
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
                    @include('portal/menu')

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
    
    
<section class="parallax-window" data-parallax="scroll" data-image-src="{{{ asset('static/img/masjid-lampriet.jpg') }}}" data-natural-width="1400" data-natural-height="470">
    <!-- <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Paris Hotels</h1>
        <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div> -->
</section><!-- End section -->
    
<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li>Events</li>
                    </ul>
        </div>
</div><!-- End Position -->

<div class="container margin_60">
    <div class="row">
        <aside class="col-lg-3 col-md-3">
       
        
        <div class="box_style_cat">
            <ul id="cat_nav">
                <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All Event <span>(141)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-3"></i>Culinary <span>(20)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-4"></i>Exhibition <span>(16)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-44"></i>Entertainment <span>(12)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-37"></i>Performing Arts School <span>(11)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-14"></i>Science & Tech <span>(20)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-43"></i>Hobbies <span>(08)</span></a></li>
                <li><a href="#"><i class="icon_set_1_icon-28"></i>Fashion <span>(11)</span></a></li>
                 <li><a href="#"><i class="icon_set_1_icon-28"></i>Charity & Causes <span>(11)</span></a></li>
                  <li><a href="#"><i class="icon_set_1_icon-28"></i>Auto, Boat & Air <span>(11)</span></a></li>
            </ul>
        </div>
        
        

        </aside><!--End aside -->
        
        <div class="col-lg-9 col-md-8">
        
            <div class="row">
            
            @foreach ($events as $data)
                
                <div class="col-md-6 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <div class="tour_container">
                        <div class="img_container">
                            <a href="single_tour.html">
                            <img style="height: 300px;" src="{{{ asset('media/event') }}}/{{ $data->image_poster }}" width="800" height="533" class="img-responsive" alt="">
                            <div class="short_info">
                                <i class="icon_set_1_icon-36"></i>{{ $data->ticket_price }}<!-- <span class="price"><sup>$</sup>45</span> -->
                            </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h4>{{ $data->event_name }}</h4>
                            <div style="margin-top: -10px;">
                                {{ date("d M Y", strtotime($data->date_start)) }} -  {{  date("d M Y", strtotime($data->date_end)) }}
                            </div><!-- end rating -->
                            
                        </div>
                    </div><!-- End box tour -->
                </div><!-- End col-md-6 -->
                
            @endforeach
            </div><!-- End row -->
            
            
            <hr>
                
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- end pagination-->
                
        </div><!-- End col lg 9 -->
    </div><!-- End row -->
</div>

@include('portal/footer')


<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="{{{ asset('static/js/jquery-1.11.2.min.js') }}}"></script>
<script src="{{{ asset('static/js/common_scripts_min.js') }}}"></script>
<script src="{{{ asset('static/js/functions.js') }}}"></script>

  </body>
</html>